<?php get_header(); ?>

<?php // Loop 1
$loop1 = new WP_Query(array(
  'post_type' => 'alumni',
  'name' => 'landing-page'
)); // exclude category
while($loop1->have_posts()) : $loop1->the_post(); ?>

<!--feature section-->
<div class="feature__layer" style="background-image: url(<?php echo get_full_image_src()?>);">
  <div class="feature__container">
    <div class="feature__main">



      <?php include "svg/earthdance-logo.php" ?>

      <h1 class="feature__heading">Alumni</h1>

    </div>
  </div>
</div>

<div class="page">
	<div class="page__container">
    <div class="page__content">

      <?php echo get_field('alumni_bio'); ?>

<?php endwhile; wp_reset_postdata(); ?>

      <?php
      // Loop 2
      $getLandingPage = get_page_by_path( 'landing-page', OBJECT, 'alumni' );
      $excludeLandingPage = $getLandingPage->ID;

      $args = array(
        'post_type' => 'alumni',
        'post__not_in' => array($excludeLandingPage),
        'posts_per_page' => -1
      );
      $loop2 = new WP_Query( $args );
      while($loop2->have_posts()) : $loop2->the_post(); ?>

      <div>
        <div class="grow__pic" style="background-image: url(<?php echo get_full_image_src()?>);"></div>
        <h3 class="grow__subheading"><?php the_title()?></h3>
        <h4><?php echo get_field('alumni_years'); ?></h4>
        <p><?php echo get_field('alumni_bio'); ?></p>
        <!-- <p><a href="<?php //echo $url ?>" class="grow__button">read more</a></p> -->
      </div>

      <?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
