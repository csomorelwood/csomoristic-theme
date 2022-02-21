<?php get_header(); ?>

<section class="desktop">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="icon">
      <?php the_post_thumbnail(); ?>
      <?php the_title(); ?>
    </div>
  <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>