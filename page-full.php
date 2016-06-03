<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="hero" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>');">
	 		<h2><?php the_title(); ?></h2>
		</div>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
    </div> 
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>