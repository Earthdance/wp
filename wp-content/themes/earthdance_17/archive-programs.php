<?php get_header(); ?>

<?php // Loop 1
$loop1 = new WP_Query(array(
  'post_type' => 'programs',
  'name' => 'landing-page'
)); // exclude category
while($loop1->have_posts()) : $loop1->the_post(); ?>

<!--feature section-->
<div class="feature__layer" style="background-image: url(<?php echo get_full_image_src()?>);">
  <div class="feature__container">
    <div class="feature__main">

      <?php include "svg/earthdance-logo.php" ?>

      <h1 class="feature__heading">Farmers</h1>

    </div>
  </div>
</div>

<div class="page">
	<div class="page__container">
    <div class="page__content-padding">

      <?php the_content(); ?>

    </div>
  </div>
</div>

<?php endwhile; wp_reset_postdata(); ?>

<div class="page brownBg">
	<div class="page__container">
    <div class="page__content">
      <div class="gallery__layer">

        <?php
          // Loop 2
          $getLandingPage = get_page_by_path( 'landing-page', OBJECT, 'programs' );
          $excludeLandingPage = $getLandingPage->ID;

          $args = array(
            'post_type' => 'programs',
            'post__not_in' => array($excludeLandingPage),
            'posts_per_page' => -1,
            'tax_query' => array(
          		array(
          			'taxonomy' => 'program_types',
          			'field'    => 'slug',
          			'terms'    => 'yeah',
          		),
          	),
          );
          $loop2 = new WP_Query( $args );
          while($loop2->have_posts()) : $loop2->the_post(); ?>

          <div class="gallery__item">
              <a href="<?php the_permalink(); ?>" class="gallery__button" style="background-image: url(<?php echo get_full_image_src() ?>);">
                <span><?php the_title()?></span>
              </a>
          </div>

        <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
