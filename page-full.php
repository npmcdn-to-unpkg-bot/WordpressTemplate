<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<!-- variables -->
<?php $main_color = get_field('main_color', 'options'); ?>
<?php $accent_color = get_field('accent_color', 'options'); ?>
<?php $text_color = get_field('text_color', 'options'); ?>
<?php $background_color = get_field('background_color', 'options'); ?>
<?php $footer_background_color = get_field('footer_background_color', 'options'); ?>

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