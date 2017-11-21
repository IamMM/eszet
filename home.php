<?php
/*
Template Name: Startseite
*/
?>

<?php get_header();?>

<div id="video-container" class="container">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/243924953?color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
</div>

<div class="strip-container container">
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <?php the_content();?>

  <?php endwhile; ?>
  <?php endif; ?>


</div><!-- /.container -->

<?php get_footer();?>