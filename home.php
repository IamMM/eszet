<?php
/*
Template Name: Startseite
*/
?>

<?php get_header();?>

<!-- Swiper -->
<div class="swiper-container container" id="video-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aIqlQrcfl0E?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ixmb148iLKI?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<!-- Add Pagination -->
<div class="swiper-pagination"></div>

<div class="strip-container container">
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <?php the_content();?>

  <?php endwhile; ?>
  <?php endif; ?>


</div><!-- /.container -->

<?php get_footer();?>