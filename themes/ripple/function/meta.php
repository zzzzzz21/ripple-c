<?php
  function description() {
    global $post;

    if (is_front_page()) {
      $description = get_bloginfo('description');
    } elseif (is_home()) {
      $get_page_id = get_page_by_path("news");
      $description = get_post_meta($get_page_id->ID, 'description', true);
    } elseif (is_single()) {
      $description = get_post_meta($post->ID, 'description', true);
      if (empty($description)) {
        $get_page_id = get_page_by_path("news");
        $description = get_post_meta($get_page_id->ID, 'description', true);
      }
    } else {
      $description = get_post_meta($post->ID, 'description', true);
    }

    if(!empty($description)){
      echo $description;
    } else {
      echo get_bloginfo('description');
    }
  }

  function keyword() {
    global $post;

    if (is_home()) {
      $get_page_id = get_page_by_path("news");
      $keyword = get_post_meta($get_page_id->ID, 'keyword', true);
    } elseif (is_single()) {
      $keyword = get_post_meta($post->ID, 'keyword', true);
      if (empty($keyword)) {
        $get_page_id = get_page_by_path("news");
        $keyword = get_post_meta($get_page_id->ID, 'keyword', true);
      }
    } else {
      $keyword = get_post_meta($post->ID, 'keyword', true);
    }

    if(!empty($keyword)){
      echo $keyword;
    } else {
      $get_page_id = get_page_by_path("top");
      echo get_post_meta($get_page_id->ID, 'keyword', true);
    }
  }
?>
