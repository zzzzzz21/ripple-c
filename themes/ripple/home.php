<?php get_header(); ?>
<!-- home.php -->
<div id="data-contents" class="contents">
  <div class="page-head">
    <div class="container">
      <h2 class="page-head__title">お知らせ</h2>
    </div>
  </div>
  <div class="page-body">
    <div class="breadcrumb">
      <div class="container">
        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a itemprop="url" class="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">ホーム</span></a></span>
        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
          <span class="path">&gt;</span>
          <strong class="current"><span itemprop="title">お知らせ</span></strong>
        </span>
      </div>
    </div>
    <div class="page-block page-block--tab-control block-news">
      <?php get_template_part('parts/news','tab'); ?>
    </div>
    <div class="page-block page-block--tab-body">
      <?php get_template_part('parts/news','list'); ?>
    </div>
  </div>
  <?php get_template_part('parts/contact'); ?>
</div>
<!-- /[.contents] -->
<?php get_footer(); ?>
