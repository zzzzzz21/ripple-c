<?php get_header(); ?>
<!-- page.php -->
<div id="data-contents" class="contents">
  <?php
    remove_filter('the_content', 'wpautop');
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    } else {
      echo 'no contents.';
    }
  ?>

  <?php get_template_part('parts/contact'); ?>
</div>
<!-- /[.contents] -->
<?php get_footer(); ?>
