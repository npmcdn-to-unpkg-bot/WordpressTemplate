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

<div class="main">
	<div class="container">
		<div class="content">
		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<h2 style="color:<?php echo $main_color ?>;"><?php the_title(); ?></h2>
			<div style="color:<?php echo $text_color ?>;" class="contactContent">
				<?php the_content(); ?>
			</div>
			<?php 
				$location = get_field('google_map');

				if( !empty($location) ):
			?>
			<div class="contactCard">
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			<?php 
				endif; 
			?>
				<div style="color:<?php echo $text_color ?>;" class="moreInfo">
					<a style="color:<?php echo $text_color ?>;" href="mailto:<?php the_field('email') ?>&amp;subject=<?php get_bloginfo('name') ?>" class="email"><?php the_field('email') ?></a>
					<div class="address"><?php the_field('address') ?></div>
					<div class="hours"><?php the_field('hours') ?></div>
				</div>
			</div>

		<?php endwhile; // end the loop?>
		</div>
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>