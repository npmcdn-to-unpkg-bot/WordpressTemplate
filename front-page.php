<?php get_header();  ?>
    <?php if (has_post_thumbnail()) {?>

<div class="hero" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>');">
    <div class="headlineContainer">
      <h4><?php the_field('tag_line') ?></h4>
      <h1><?php the_field('title') ?></h1>
    </div>
  </div>
  <?php } ?>
<div class="main">
	<div class="container">

		<div class="content">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>


				<div class="gallery">
					<?php $frontpageposts = new WP_Query( array(
						'posts_per_page' => 6,
						'post_type' => 'post',
						'tag' => 'feature',
						'order' => 'DSC'
						) 
					); ?>
					<?php if ( $frontpageposts->have_posts() ) : ?>
						<?php while ( $frontpageposts->have_posts() ) : $frontpageposts->the_post(); ?>
								<div class="imageItem">
									<a href="<?php the_permalink(); ?>">
										<div class="frontpageimgcontainer" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')">
											
											<!--  -->
										</div>
									</a>
									<a href="<?php the_permalink(); ?>"><h5><?php echo $post->post_title ?></h5></a>
								</div>

						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>

					<?php else:  ?>
						[stuff that happens if there aren't any posts]
					<?php endif; ?>
				</div>
				<a class="viewMore" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">View More</a>

			<?php endwhile; // end the loop?>

    </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>