<?php get_header(); ?>
<!-- front-page.php -->
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

  <section class="block-home block-news">
    <h2 class="block__title"><span>お知らせ</span></h2>
    <?php
      get_template_part('parts/news','tab');
      get_template_part('parts/news','list');
    ?>
    <div class="block-news__foot">
      <div class="news-list__container">
        <p class="link-news"><a href="<?php echo home_url('/'); ?>news/">お知らせ一覧へ</a></p>
      </div>
    </div>
  </section>
  <!-- /[.block-home.block-news] -->

  <?php get_template_part('parts/contact'); ?>
</div>
<!-- /[.contents] -->
<?php get_footer(); ?>
