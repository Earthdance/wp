<?php get_header(); ?>

<?php // Loop 1
$loop1 = new WP_Query(array(
  'post_type' => 'partners',
  'name' => 'landing-page'
)); // exclude category
while($loop1->have_posts()) : $loop1->the_post(); ?>

<!--feature section-->
<div class="feature__layer" style="background-image: url(<?php echo get_field('partner_logo'); ?>);">
  <div class="feature__container">
    <div class="feature__main">



      <?php include "svg/earthdance-logo.php" ?>

      <h1 class="feature__heading">Partners</h1>

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

<div class="page fogBg">
	<div class="page__container">
    <div class="page__content">
      <div class="gallery__layer">

        <?php endwhile; wp_reset_postdata(); ?>

          <?php
          // Loop 2
          $getLandingPage = get_page_by_path( 'landing-page', OBJECT, 'partners' );
          $excludeLandingPage = $getLandingPage->ID;

          $args = array(
            'post_type' => 'partners',
            'post__not_in' => array($excludeLandingPage),
            'posts_per_page' => -1
          );
          $loop2 = new WP_Query( $args );
          while($loop2->have_posts()) : $loop2->the_post(); ?>

          <div class="gallery__item">
            <a href="<?php the_permalink(); ?>" class="gallery__button" style="background-image: url(<?php echo get_field('partner_logo'); ?>); background-size: contain; background-color: white;">
              <span><?php the_title()?></span>
            </a>
          </div>

        <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
