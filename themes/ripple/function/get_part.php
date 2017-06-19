<?php
  //http://blog.mah-lab.com/2014/05/23/wordpress-shortcode-template/
  function get_part($atts) {
    extract(
      shortcode_atts(
        array(
          'slug' => '',
          'name' => '',
        ),
      $atts)
    );
    ob_start();
    get_template_part($slug, $name);
    return ob_get_clean();
  }
  add_shortcode('get_part', 'get_part');
?>
