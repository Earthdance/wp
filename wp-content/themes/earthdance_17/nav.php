<!-- <div class="nav__layer">
  <div class="nav__container">
    <a href="#" class="nav__link">About</a>
    <a href="#" class="nav__link">Food</a>
    <a href="#" class="nav__link">Farmers</a>
    <a href="#" class="nav__link">Community</a>
    <a href="#" class="nav__link">Support</a>
    <a href="#" class="nav__link">News</a>
    <a href="#" class="nav__link">Jobs</a>
    <a href="#" class="nav__link">Contact</a>
  </div>
</div> -->

<?php
  wp_nav_menu( array(
   'theme_location' => 'primary-menu',
   'container' => 'div',
   'container_class' => 'nav__layer',
   'menu_id' => false,
   'menu_class' => 'nav__container'
 ));
?>
