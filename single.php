<?php get_header(); ?>

<!-- variables -->
<?php $main_color = get_field('main_color', 'options'); ?>
<?php $accent_color = get_field('accent_color', 'options'); ?>
<?php $text_color = get_field('text_color', 'options'); ?>
<?php $background_color = get_field('background_color', 'options'); ?>
<?php $post_card_background = get_field('post_card_background', 'options'); ?>

<div class="main">
	<div class="container">


		<?php $image = get_field('header_image', 'options');
		if( !empty($image) ) {?>
		<div class="productHero hero" style="background-image:url('<?php echo $image['url']; ?>');">
			<div class="headlineContainer">
				<h4 style="color:<?php echo $main_color ?>;"><?php the_field('tag_line') ?></h4>
				<h1 style="color:<?php echo $main_color ?>;"><?php the_field('title') ?></h1>
			</div>
		</div>
		<?php } ?>
		<div class="content">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div style="background-color:<?php echo $post_card_background ?>;" class="productCard">
					<div class="productImage" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')">
					
					</div> <!-- /.productImage -->
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="entry-title"><?php the_title(); ?></h1>

						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages(array(
								'before' => '<div class="page-link"> Pages: ',
								'after' => '</div>'
								)); ?>
						</div><!-- .entry-content -->
					</div> <!-- /#post -->
				</div> <!-- /.productCard -->

			<?php endwhile; // end of the loop. ?>

		</div> <!-- /.content -->
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>