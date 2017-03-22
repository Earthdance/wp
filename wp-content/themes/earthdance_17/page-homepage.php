<?php get_header(); ?>

<?php
  $args = array(
    'post_type' => 'homepage',
    'posts_per_page' => 1
  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <!--feature section-->
  <div class="feature__layer">
    <div class="feature__container">
      <div class="feature__main">

        <?php include "svg/earthdance-logo.php" ?>

        <h1 class="feature__heading"><?php echo get_field( "featured_heading" ); ?></h1>
        <h2 class="feature__subheading"><?php echo get_field( "featured_subheading" ); ?></h2>

      </div>
    </div>
  </div>

  <!--grow section-->
  <div class="grow__layer">
    <div class="grow__container">
      <h2 class="grow__heading"><?php echo get_field( "grow_heading" ); ?></h2>

      <?php if( have_rows('grow_items') ): while ( have_rows('grow_items') ) : the_row();

        // vars
    		$image = get_sub_field('item_image');
        $heading = get_sub_field('item_heading');
    		$text = get_sub_field('item_text');
    		$url = get_sub_field('item_url');
      ?>

        <div class="grow__columns zipper">
          <div class="grow__pic" style="background-image: url(<?php echo $image?>);">
            <h3 class="grow__title"><?php echo $heading ?></h3>
          </div>
          <div class="grow__content">
            <p><?php echo $text ?></p>
            <p><a href="<?php echo $url ?>" class="grow__button">read more</a></p>
          </div>
        </div>

      <?php endwhile; else : endif; ?>

    </div>
  </div>


  <!--stats section-->
  <div class="stats__layer">
    <div class="stats__container">
      <h2 class="stats__heading">Did you know...</h2>
      <div class="stats__columns">
  			<div class="stats__item">
  				<h3 class="stats__subheading">28.6 billion</h3>
  				<div class="stats__content">
  					<p>The U.S. organic industry grew by nearly 8% in 2010, to reach $28.6 billion in sales (Organic Trade Association, 2011 Organic Industry Survey)</p>
  				</div>
  			</div>
  	    <div class="stats__item">
  	      <h3 class="stats__subheading">78%</h3>
  				<div class="stats__content">
  					<p>78% of U.S. families purchase at least some organic foods (Organic Trade Association, 2011 U.S. Families' Organic Attitudes and Beliefs Study)</p>
  				</div>
  	    </div>
  		</div>
    </div>
  </div>

  <!--believe section-->
  <div class="believe__layer">
    <div class="believe__container">
      <div class="believe__columns">
        <h2 class="believe__heading">We believe..</h2>
  			<div class="believe__content">
  				<p>.. in seeding the change we seek every day.  Here, kids eat greens, beginning farmers learn soil stewardship, biodiversity thrives, and everyone has a hand in producing the food we grow. We prove that skilled growers and concerned consumers can work together to achieve a better food system</p>
  			</div>
      </div>
      <div class="believe__photo">
  			<div class="believe__image">
  			</div>
        <div class="believe__cta">
          <a href="#" class="believe__button">check us out</a>
        </div>
  		</div>
  	</div>
  </div>

  <!--support section-->
  <div class="support__layer">
  	<div class="support__container">
  		<div class="support__slogan">
        <h2 class="support__heading">Planting for<span>a better tomorrow</span></h2>

        <?php include "svg/earthdance-logo.php" ?>

      </div>
  		<div class="support__slogan">
  			<h2 class="support__heading">Support EarthDance</h2>
  			<div class="support__options">
  				<a href="#" class="support__button">Donate</a>
  				<a href="#" class="support__button">Volunteer</a>
  			</div>
  		</div>
  	</div>
  </div>

<?php endwhile;?>

<?php get_footer(); ?>
