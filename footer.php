<!-- variables -->
<?php $main_color = get_field('main_color', 'options'); ?>
<?php $accent_color = get_field('accent_color', 'options'); ?>
<?php $text_color = get_field('text_color', 'options'); ?>
<?php $background_color = get_field('background_color', 'options'); ?>
<?php $post_card_background = get_field('post_card_background', 'options'); ?>

<footer>
	<div class="container">
	<?php the_custom_logo(); ?>
	<div class="socialIcons">
		<?php if( get_field('facebook', 'options') ): ?>
			<a target="_blank" style="color:<?php echo $accent_color ?>;" href="<?php the_field('facebook', 'options') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<?php endif; ?>
		<?php if( get_field('twitter', 'options') ): ?>
			<a target="_blank" style="color:<?php echo $accent_color ?>;" href="<?php the_field('twitter', 'options') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<?php endif; ?>
		<?php if( get_field('github', 'options') ): ?>
			<a target="_blank" style="color:<?php echo $accent_color ?>;" href="<?php the_field('github', 'options') ?>"><i class="fa fa-github" aria-hidden="true"></i></a>
		<?php endif; ?>
		<?php if( get_field('google', 'options') ): ?>
			<a target="_blank" style="color:<?php echo $accent_color ?>;" href="<?php the_field('google', 'options') ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		<?php endif; ?>
		<?php if( get_field('pinterest', 'options') ): ?>
			<a target="_blank" style="color:<?php echo $accent_color ?>;" href="<?php the_field('pinterest', 'options') ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
		<?php endif; ?>
		<?php if( get_field('instagram', 'options') ): ?>
			<a target="_blank" style="color:<?php echo $accent_color ?>;" href="<?php the_field('instagram', 'options') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<?php endif; ?>
		<?php if( get_field('snapchat', 'options') ): ?>
			<a target="_blank" style="color:<?php echo $accent_color ?>;" href="<?php the_field('snapchat', 'options') ?>"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a>
		<?php endif; ?>
	</div>
	<p>&copy; All rights reserved. <?php echo date('Y'); ?></p>
	</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>