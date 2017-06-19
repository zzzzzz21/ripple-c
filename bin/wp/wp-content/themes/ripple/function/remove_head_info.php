<?php
  remove_action('wp_head', 'feed_links_extra', 3 );
  remove_action('wp_head', 'feed_links', 2 );
  remove_action('wp_head', 'index_rel_link' );
  remove_action('wp_head', 'parent_post_rel_link', 10, 0 );
  remove_action('wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  // generator
  remove_action('wp_head', 'wp_generator' );
  // wlwmanifest
  remove_action('wp_head', 'wlwmanifest_link' );
  // EditURI
  remove_action('wp_head', 'rsd_link' );
  // canonical
  remove_action('wp_head', 'rel_canonical');
  // 絵文字無効化
  remove_action('wp_head', 'print_emoji_detection_script', 7 );
  remove_action('wp_print_styles', 'print_emoji_styles', 10 );
  // WP JSON
  remove_action('wp_head', 'rest_output_link_wp_head');
?>
