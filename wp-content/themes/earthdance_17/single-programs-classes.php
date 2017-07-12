<?php get_header(); ?>

<?php if (get_full_image_src()) { ?>
<!--feature section-->
  <div class="feature__layer" style="background-image: url(<?php echo get_full_image_src();?>);">
    <div class="feature__container">
      <div class="feature__main">

        <?php include "svg/earthdance-logo.php" ?>

        <h1 class="feature__heading"><?php the_title( ); ?></h1>

      </div>
    </div>
  </div>
<?php } else {?>

  <div class="feature__layer" style="background-image: url(/wp-content/uploads/2009/12/oldShed.jpg);">
    <div class="feature__container">
      <div class="feature__main">

        <?php include "svg/earthdance-logo.php" ?>

        <h1 class="feature__heading"><?php the_title( ); ?></h1>

      </div>
    </div>
  </div>
<?php } ?>

  <div class="grow__layer padding-top-4-rem">
    <div class="grow__container">

      <?php
        $args = array(
          'post_type' => 'classes',
          'posts_per_page' => -1,
          'order'     => 'ASC'
        );
        $loop2 = new WP_Query( $args );
        while($loop2->have_posts()) : $loop2->the_post(); ?>

        <div class="grow__columns zipper">
          <div class="grow__pic setHeight" style="background-image: url(<?php echo get_full_image_src();?>)">

          </div>
          <div class="grow__content">
            <h2 class="grow__title"><?php the_title();  ?></h2>
            <p><?php echo get_field( "class_description" ); ?></p>
            <p><?php echo get_field( "class_date" ); ?></p>
            <!-- <p><a href="<?php //the_permalink(); ?>" class="grow__button"><?php //echo "Read more" ?></a></p> -->
          </div>
        </div>

      <?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div>


<?php get_footer(); ?>
