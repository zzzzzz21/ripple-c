<?php

  // body_class拡張
  include 'function/body_class_plus.php';

  // いらないヘッダを削除
  include 'function/remove_head_info.php';

  // テンプレートのパーツを出力
  include 'function/get_part.php';

  // メタ
  include 'function/meta.php';

  // ショートコード [url] => home_url()
  function shortcode_url() {
    return home_url();
  }
  add_shortcode('home', 'shortcode_url');

  // ショートコード [tmpl] => get_template_directory_uri()
  function shortcode_templateurl() {
    return get_template_directory_uri();
  }
  add_shortcode('tmpl', 'shortcode_templateurl');

  // ツールバー非表示
  function my_function_admin_bar(){
    return false;
  }
  add_filter('show_admin_bar', 'my_function_admin_bar');

?>
