<?php get_header(); ?>
<!-- single.php -->
<div id="data-contents" class="contents">
  <div class="page-head">
    <div class="container">
      <h2 class="page-head__title">お知らせ</h2>
    </div>
  </div>
<?php
  remove_filter('the_content', 'wpautop');
  if (have_posts()) {
    while (have_posts()) {
      the_post();
?>
  <div class="page-body">
    <div class="breadcrumb">
      <div class="container">
        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a itemprop="url" class="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">ホーム</span></a></span>
        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><span class="path">&gt;</span><a href="<?php echo home_url('/'); ?>news/" itemprop="url"><span itemprop="title">お知らせ</span></a></span>
        <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
          <span class="path">&gt;</span>
          <strong class="current"><span itemprop="title"><?php the_title() ?></span></strong>
        </span>
      </div>
    </div>
    <div class="page-block page-block__body">
      <div class="news-detail__container">
        <article class="news-detail">
          <h3 class="news-detail__head">
            <time class="news-list__item--time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
<?php
  $array_cats = get_the_category();
  $info_cat = $array_cats[0];
?>
            <span class="news-list__item--category is-<?php echo $info_cat->slug; ?>"><?php echo $info_cat->name; ?></span>
            <span class="news-detail__title"><?php
              the_title();
            ?></span>
          </h3>
          <div class="news-detail__body"><?php
            the_content();
          ?></div>
          <div class="news-detail__foot">
            <div class="btn-area">
              <a href="<?php echo home_url('/'); ?>news/" class="btn-back">お知らせ一覧に戻る</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
<?php
    }
  } else {
?>
  <div class="page-body">
    <p>記事がありません</p>
  </div>
<?php
  }
?>
  <?php get_template_part('parts/contact'); ?>
</div>
<!-- /[.contents] -->
<?php get_footer(); ?>
