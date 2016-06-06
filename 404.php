<?php get_header(); ?>

<!-- variables -->
<?php $main_color = get_field('main_color', 'options'); ?>
<?php $accent_color = get_field('accent_color', 'options'); ?>
<?php $text_color = get_field('text_color', 'options'); ?>
<?php $background_color = get_field('background_color', 'options'); ?>
<?php $post_card_background = get_field('post_card_background', 'options'); ?>

<div class="main">
  <div class="container">

    <h1 style="color:<?php echo $main_color ?>;">Page Not Found. 404 Other Pages are waiting.</h1>
    <p style="color:<?php echo $text_color ?>;">Apologies, but the page you requested could not be found. Perhaps searching will help.</p>
    <?php get_search_form(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>

