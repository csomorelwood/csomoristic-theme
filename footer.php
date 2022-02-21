</main>

<footer>
  <div class="startbtn">
    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/img/start.png" alt="Start button" width="30" height="30">
    <?php echo __('Start', 'vassg'); ?>
  </div>
  <div class="iconbar">

  </div>
  <div class="time">
    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/img/sound.png" alt="Start button" width="37" height="29">
    <?php echo current_time('H:i'); ?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
