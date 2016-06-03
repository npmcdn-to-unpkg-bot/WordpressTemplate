<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php echo get_the_post_thumbnail($post, 'full'); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <!--<?php get_sidebar(); ?>-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>