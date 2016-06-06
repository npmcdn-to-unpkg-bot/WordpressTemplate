<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<!-- variables -->
<?php $main_color = get_field('main_color', 'options'); ?>
<?php $accent_color = get_field('accent_color', 'options'); ?>
<?php $text_color = get_field('text_color', 'options'); ?>
<?php $background_color = get_field('background_color', 'options'); ?>
<?php $post_card_background = get_field('post_card_background', 'options'); ?>

<div class="main">
	<div class="container">
	
	<?php if (wp_get_attachment_url( get_post_thumbnail_id( get_option( 'page_for_posts' ),'full') )) {?>
	<div class="productHero hero" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_option( 'page_for_posts' ),'full') ); ?>');">
		<div class="headlineContainer">
			<h4 style="color:<?php echo $main_color ?>;"><?php the_field('tag_line') ?></h4>
			<h1 style="color:<?php echo $main_color ?>;"><?php the_field('title') ?></h1>
		</div>
	</div>
	<?php } ?>

		<div class="content">
			<div class="button-group filter-button-group">
				<button style="color:<?php echo $accent_color ?>;border: 1px solid <?php echo $accent_color ?>" data-filter="*">All</button>
				<?php 
					$args = array(
						"type"      => "post",      
						"orderby"   => "name",
						'echo' => 0,
						'exclude' => 'Uncategorized',
						"order"     => "ASC");
				?>
				<?php $categories = get_categories(); ?>

				<?php foreach ($categories as $key => $value): ?>

					<?php $a = ".category-"; ?>
					<?php $b = $value->name ?>
					<?php $dataName = $a . $b ?>
					<?php if ($b != 'Uncategorised'): ?>
					<button style="color:<?php echo $accent_color ?>;border: 1px solid <?php echo $accent_color ?>" data-filter="<?php echo strtolower($dataName) ?>"><?php echo $value->name ?></button>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="gallery grid">
				<?php get_template_part( 'loop', 'index' );	?>
			</div>
		</div> <!--/.content -->

	<!--<?php get_sidebar(); ?>-->

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>