<!--footer section-->
<div class="footer__layer">
  <div class="footer__container">
    <div class="footer__item">
      <?php include "includes/logo.php" ?>
      <p class="footer__heading">EarthDance</p>
      <p class="footer__copyright">© <?php echo date("Y"); ?></p>
      <p><?php the_field('address', 'option'); ?></p>
    </div>
    <div class="footer__item">
      <p class="footer__privacy">Privacy Policy</p>
      <p class="footer__privacy">Legal</p>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
