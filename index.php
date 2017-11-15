<?php get_header();?>

<div class="strip-container container">
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    
    <?php the_content();?>
     
  <?php endwhile; ?>
  <?php endif; ?>
  

</div><!-- /.container -->

<?php get_footer();?>