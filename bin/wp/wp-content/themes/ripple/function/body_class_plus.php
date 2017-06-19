<?php
/*
  body_class()拡張
*/
function body_class_plus() {
  global $post;

  // オリジナル
  $array_class_body = get_body_class();

  $postname = $post->post_name;

  // 親スラッグ
  if($post->post_parent != 0){
    $parent = get_page_uri($post->post_parent);
    if ($parent == 'service') {
      $array_class_body[] = 'xService';
    }
    $array_class_body[] = 'xEntry';
  }

  if(is_front_page()){
    $array_class_body[] = 'siteIndex';
  } elseif (is_home()) {
    $array_class_body[] = 'page xNews xCatIndex';
  } elseif (is_single()) {
    $array_class_body[] = 'page xNews xEntry';
  } elseif ($postname == 'service') {
    $array_class_body[] = 'xService xCatIndex';
  } elseif ($postname == 'company') {
    $array_class_body[] = 'xCompany xCatIndex';
  } elseif ($postname == 'recruit') {
    $array_class_body[] = 'xRecruit xCatIndex';
  }

  if($array_class_body){
    echo join(' ', $array_class_body);
  }
}
?>
