<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>


<div class="main">
	<div class="container">

		<div class="content">
			<div class="button-group filter-button-group">
				<button data-filter="*">All</button>
				<button data-filter=".category-special">Special</button>
				<button data-filter=".category-feature">Feature</button>
			</div>
			<div class="gallery grid">
				<?php get_template_part( 'loop', 'index' );	?>
			</div>
		</div> <!--/.content -->

	<!--<?php get_sidebar(); ?>-->

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>