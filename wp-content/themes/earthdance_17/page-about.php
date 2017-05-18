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

<div class="page__layer">
  <div class="page__container">
    <div class="page__content">
      <div class=""><?php echo get_field( "intro_text" ); ?></div>
    </div>
  </div>
</div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if( have_rows('about_sections') ): while ( have_rows('about_sections') ) : the_row();
        // vars
        $image = get_sub_field('section_image');
        $heading = get_sub_field('section_headings');
        $content = get_sub_field('section_content');
      ?>

      <div class="feature__layer" style="background-image: url(<?php echo $image?>);">
        <div class="feature__container">
          <div class="feature__main">
            <h3 class="feature__heading"><?php echo $heading ?></h3>
          </div>
        </div>
      </div>

      <div class="page__layer">
        <div class="page__container">
          <div class="page__content">
            <?php echo $content ?>
          </div>
        </div>
      </div>

    <?php endwhile; else : endif; ?>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
