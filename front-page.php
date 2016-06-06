<!-- variables -->
<?php $main_color = get_field('main_color', 'options'); ?>
<?php $accent_color = get_field('accent_color', 'options'); ?>
<?php $text_color = get_field('text_color', 'options'); ?>
<?php $background_color = get_field('background_color', 'options'); ?>
<?php $post_card_background = get_field('post_card_background', 'options'); ?>

<?php get_header();  ?>
    <?php if (has_post_thumbnail()) {?>

<div class="hero" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>');">
	<div class="headlineContainer">
		<h4 style="color:<?php echo $main_color ?>;"><?php the_field('tag_line') ?></h4>
		<h1 style="color:<?php echo $main_color ?>;"><?php the_field('title') ?></h1>
	</div>
</div>
<?php } ?>
<div class="main">
	<div class="container">

		<div style="color:<?php echo $text_color ?>;" class="content">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="pageContent">
					<!-- <h2><?php the_title(); ?></h2> -->
					<?php the_content(); ?>
				</div>


					<?php $frontpageposts = new WP_Query( array(
						'posts_per_page' => 3,
						'post_type' => 'post',
						'category_name' => 'special',
						'order' => 'DSC'
						) 
					); ?>
					<?php if ( $frontpageposts->have_posts() ) : ?>
						<h2 style="color:<?php echo $main_color ?>;" class="sectionTitle"><?php the_field('special_title') ?></h2>
							<div style="background-color:<?php echo $post_card_background ?>;" class="frontpageGallery">
						<?php while ( $frontpageposts->have_posts() ) : $frontpageposts->the_post(); ?>
								<div class="imageItem specialItem">
									<a href="<?php the_permalink(); ?>">
										<div class="frontpageimgcontainer" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')">
											
											<!--  -->
										</div>
									</a>
									<a href="<?php the_permalink(); ?>"><h5 style="color:<?php echo $accent_color ?>;" ><?php echo $post->post_title ?></h5></a>
								</div>

						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>

					<?php else:  ?>
						<!-- <p>There are no special items at the moment. Please stay tuned for updates.</p> -->
					<?php endif; ?>
				</div>


					<?php $frontpageposts = new WP_Query( array(
						'posts_per_page' => 6,
						'post_type' => 'post',
						'category_name' => 'feature',
						'order' => 'DSC'
						) 
					); ?>
					<?php if ( $frontpageposts->have_posts() ) : ?>
						<h2 style="color:<?php echo $main_color ?>;" class="sectionTitle"><?php the_field('feature_title') ?></h2>
						<div class="frontpageGalleryContainer">
							<div class="frontpageGallery specialsGallry">
								<?php while ( $frontpageposts->have_posts() ) : $frontpageposts->the_post(); ?>
									<div class="imageItem">
										<a href="<?php the_permalink(); ?>">
											<div class="frontpageimgcontainer" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')">
												
												<!--  -->
											</div>
										</a>
										<a href="<?php the_permalink(); ?>"><h5 style="color:<?php echo $accent_color ?>;" ><?php echo $post->post_title ?></h5></a>
									</div>

								<?php endwhile; ?>
								</div>
								<a style="color:<?php echo $accent_color ?>;" class="viewMore" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">View All</a>
								<?php wp_reset_postdata(); ?>

								<?php else:  ?>
								<!-- <p>There are no featured items at the moment. Please stay tuned for updates.</p> -->
							</div>
					<?php endif; ?>

			<?php endwhile; // end the loop?>

    </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>