<?php // If there are no posts to display, such as an empty archive page ?>

<!-- variables -->
<?php $main_color = get_field('main_color', 'options'); ?>
<?php $accent_color = get_field('accent_color', 'options'); ?>
<?php $text_color = get_field('text_color', 'options'); ?>
<?php $background_color = get_field('background_color', 'options'); ?>
<?php $footer_background_color = get_field('footer_background_color', 'options'); ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<div <?php post_class("imageItem grid-item"); ?>>
			<a href="<?php the_permalink(); ?>">
				<div class="frontpageimgcontainer" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')">
					<!--  -->
				</div>
			</a>
			<a style="color:<?php echo $accent_color ?>" href="<?php the_permalink(); ?>">
				<h5><?php echo $post->post_title ?></h5>
			</a>
		</div>


	<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
