<?php get_header(); ?>
<main role="main">
  <!--feature section-->
  <div class="feature__layer">
    <div class="feature__container">
      <div class="feature__main">

        <?php include "svg/earthdance-logo.php" ?>
        <h1>404 page</h1>
        <h1 class="feature__heading"><?php echo get_field( "featured_heading" ); ?></h1>
        <h2 class="feature__subheading"><?php echo get_field( "featured_subheading" ); ?></h2>

      </div>
    </div>
  </div>
</main><!-- main -->
</div>
<?php get_footer(); ?>
