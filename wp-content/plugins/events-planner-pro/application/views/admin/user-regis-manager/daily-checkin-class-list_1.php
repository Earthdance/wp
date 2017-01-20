<?php

$epl = EPL_Base::get_instance();
$ecm = EPL_common_model::get_instance();
$rm = $this->epl->load_model( 'epl-recurrence-model' );
$erptm = $this->epl->load_model( 'epl-report-model' );
$start_date_filter = $start_date_filter != '' ? strtotime( $start_date_filter ) : false;

$curr_date = getdate( $start_date_filter ? $start_date_filter : EPL_DATE  );

$curr_year = $curr_date['year'];
$curr_month = $curr_date['mon'];
$curr_day = $curr_date['mday'];
?>

<div id="" class="class_list" style="margin:3; border: 0px solid #eee;padding: 20px;">


    <?php

    global $event_list, $event_details, $current_att_count, $session_signed_in_counts;


    $tmpl = array( 'table_open' => '<table id="upcoming_class_list" class="epl_standard_table">' );
    $epl->epl_table->set_template( $tmpl );

    $epl->epl_table->set_heading( '', 'Session Date', 'Time', 'Signed In', 'Registered', '' );

    if ( $event_list->have_posts() ):

        $r = array( );
        while ( $event_list->have_posts() ) :

            $event_list->the_post();

            setup_event_details();

            $event_id = get_the_ID();
            $current_att_count = $erptm->get_attendee_counts( $event_id );

            $counter = 1;
            foreach ( $event_details['_epl_start_date'] as $date_id => $date ):



                if ( !$range_defined &&
                        (($date < EPL_DATE && $event_details['_epl_event_status'] != 3)
                        || ($event_details['_epl_end_date'][$date_id] < EPL_DATE && $event_details['_epl_event_status'] == 3)
                        || $counter > 1)
                )
                    continue;

                $counter++;

                $start_date = $date;
                $ongoing = 0;
                if ( $event_details['_epl_event_status'] == 3 ) {
                    $ongoing = 1;
                    $event_type = $event_details['_epl_event_type'];
                    $event_rec_frequency = $event_details['_epl_recurrence_frequency'];
                    $d = array( );
                    if ( $event_type == 10 ) {

                        if ( $event_rec_frequency != '0' ) {

                            $d = $rm->recurrence_dates_from_db( $event_details, false );
                        }
                        elseif ( !epl_is_empty_array( $event_details['_epl_class_session_date'] ) ) {

                            $d = $rm->recurrence_dates_from_sessions_section();
                        }
                    }

                    if ( ($start_date = (epl_get_element_m( $curr_day, $curr_month, epl_get_element( $curr_year, $d, false ), false ))) != false ) {
                        $start_date = (strtotime( $start_date ));
                        if ( !$range_defined && $start_date < EPL_DATE )
                            continue;
                    }
                }
                if ( $range_defined ) {
                    if ( $start_date_filter ) {

                        if ( $start_date < $start_date_filter || $start_date > $start_date_filter )
                            continue;
                    }
                }
                $capacity = epl_get_element( $date_id, $event_details['_epl_date_capacity'], 0 );
                $num_regis = 0;
                $weekday = date( 'N', $start_date );

                if ( isset( $current_att_count['_total_att_' . get_the_ID() . "_date_{$date_id}"] ) )
                    $num_regis = epl_get_element( '_total_att_' . get_the_ID() . "_date_{$date_id}", $current_att_count, 0 );

                $avail = $capacity - $num_regis;
                $time_optional = epl_is_time_optonal();
                foreach ( $event_details['_epl_start_time'] as $time_id => $time ) {

                    if ( !$time_optional ) {
                        $num_regis = 0;

                        if ( isset( $current_att_count['_total_att_' . get_the_ID() . "_time_{$date_id}_{$time_id}"] ) )
                            $num_regis = epl_get_element( '_total_att_' . get_the_ID() . "_time_{$date_id}_{$time_id}", $current_att_count, 0 );
                    }

                    $weekday_specific = epl_get_element_m( $time_id, '_epl_weekday_specific_time', $event_details, array( ) );
                    if ( !empty( $weekday_specific ) && !isset( $weekday_specific[$weekday] ) )
                        continue;

                    $start_time = strtotime( $time, $start_date );

                    $signed_in_key = "{$event_id}-{$date_id}-{$start_date}-{$time_id}";

                    $signed_in_count = epl_get_element( $signed_in_key, $session_signed_in_counts, 0 );

                    $time_cap = epl_get_element( $time_id, $time, '-' );

                    //build the td rows				
                    $temp_table_row = '<td>' . $event_dom . '</td>';

                    $temp_table_row .= '<td>' . $time . (($end_time != '') ? '-' . $end_time : '') . '</td>';

                    $temp_table_row .= '<td class="event_title">' . $event_title . '</td>';

                    $temp_table_row = "<a href='' class='sign_in_link' data-event_id='{$event_id}' data-date_id='{$date_id}' data-date_ts='{$start_date}' data-time_id='{$time_id}' data-ongoing='{$ongoing}'>" . epl__( 'Check In' ) . "</a>";
                    $display_date = epl_formatted_date( $start_date );


                    $r[$start_time] = array(
                        epl_anchor( admin_url( "post.php?post=" . get_the_ID() . "&action=edit" ), get_the_title() ),
                        $display_date,
                        $time . '-' . $event_details['_epl_end_time'][$time_id],
                        $signed_in_count,
                        $num_regis,
                        $temp_table_row
                    );
                }
            endforeach;
        endwhile;

        ksort( $r );
        foreach ( $r as $row )
            $epl->epl_table->add_row( $row );

        echo $epl->epl_table->generate();
        ?>

    <?php else: ?>
        <div> Sorry, there are no events currently available.</div>
    <?php

    endif;
    wp_reset_query();
    ?>

</div>

<div id="sign_in_name_section" style="margin:20px 10px; border: 1px solid #eee;padding: 20px;">

    <h4><?php epl_e( 'Please click on "Sign In" above to begin.' ); ?></h4>


</div>
