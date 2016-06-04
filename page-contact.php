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

	 		<h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      
      <?php 
      $location = get_field('google_map');

      if( !empty($location) ):
      ?>
      <div class="contactCard">
      <div class="acf-map">
        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
      </div>
      <?php endif; ?>

      <div class="moreInfo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ad, hic atque error, dolorem aliquam natus facilis nam tempore! Praesentium deleniti dolores magni reiciendis voluptas excepturi vero dolorem ratione deserunt!</div>
      </div>

    <?php endwhile; // end the loop?>
    </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>