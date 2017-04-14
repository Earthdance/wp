<?php get_header(); ?>

<!--feature section-->
<div class="feature__layer" style="background-image: url(/wp-content/themes/earthdance_17/img/classPic.jpg);">
  <div class="feature__container">
    <div class="feature__main">

      <?php include "svg/earthdance-logo.php" ?>

      <h1 class="feature__heading">Partners</h1>

    </div>
  </div>
</div>


<div class="page">
	<div class="page__container">
    <div class="page__content">

      <?php
        $args = array(
          'post_type' => 'partners',
          'posts_per_page' => -1
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <!--grow section-->

        <div>
          <div class="grow__pic" style="background-image: url(<?php echo get_field('partner_logo'); ?>);"></div>
          <h3 class="grow__subheading"><?php the_title()?></h3>
          <h4><?php echo get_field('board_postion'); ?></h4>
          <p><?php echo get_field('board_bio'); ?></p>
          <!-- <p><a href="<?php //echo $url ?>" class="grow__button">read more</a></p> -->
        </div>

      <?php endwhile; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
