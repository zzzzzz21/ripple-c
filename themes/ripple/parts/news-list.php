<div class="news-list">
  <div class="news-list__container">
    <div class="tab-body is-active">
      <ul>
<?php
  $args = array();
  $posts = get_posts($args);
  foreach($posts as $post) {
    setup_postdata($post);
    get_template_part('parts/news','list_item');
  }
  wp_reset_postdata();
?>
      </ul>
    </div>

    <div class="tab-body is-hide">
<?php
  $args = array(
  'category_name' => 'news',
  );
  $posts = get_posts($args);
  if ($posts) {
?>
      <ul>
<?php
  foreach($posts as $post) {
    setup_postdata($post);
    get_template_part('parts/news','list_item');
  }
?>
      </ul>
<?php
    } else {
?>
      <p>このカテゴリのお知らせはありません。</p>
<?php
  }
  wp_reset_postdata();
?>
    </div>

    <div class="tab-body is-hide">
<?php
  $args = array(
  'category_name' => 'recruit',
  );
  $posts = get_posts($args);
  if ($posts) {
?>
      <ul>
<?php
  foreach($posts as $post) {
    setup_postdata($post);
    get_template_part('parts/news','list_item');
  }
?>    </u<?php
    } else {
?>
      <p>このカテゴリのお知らせはありません。</p>
<?php
  }
  wp_reset_postdata();
?>
    </div>

    <div class="tab-body is-hide">
<?php
  $args = array(
  'category_name' => 'seminar',
  );
  $posts = get_posts($args);
  if ($posts) {
?>
      <ul>
<?php
  foreach($posts as $post) {
    setup_postdata($post);
    get_template_part('parts/news','list_item');
  }
?>    </u<?php
    } else {
?>
      <p>このカテゴリのお知らせはありません。</p>
<?php
  }
  wp_reset_postdata();
?>
    </div>

  </div>
</div>
