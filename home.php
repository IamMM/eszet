<?php
/*
Template Name: Startseite
*/
?>

<?php get_header();?>

<div id="video-container" class="container">
<div class="embed-responsive embed-responsive-16by9">
   <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ixmb148iLKI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

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