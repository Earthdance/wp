<?php get_header(); ?>

<!--feature section-->
<div class="feature__layer" style="background-image: url(<?php echo get_full_image_src()?>);">
  <div class="feature__container">
    <div class="feature__main">

      <?php include "svg/earthdance-logo.php" ?>

      <h1 class="feature__heading"><?php the_title( ); ?></h1>

    </div>
  </div>
</div>


<div class="page">
	<div class="page__container">
    <h1>HELLO</h1>

        <?php echo get_the_term_list( $post->ID, 'program_types', 'People: ', ', ' ); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?></h2>

    <div class="page__content">
      <?php the_content();	?>
    </div>

    <?php endwhile; endif; ?>

	</div>
</div>

<?php get_footer(); ?>
