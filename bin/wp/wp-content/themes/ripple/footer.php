
<footer id="data-footer" class="globalFooter">
  <div id="data-pagetop" class="gotoTop">
    <a class=" btn-toTop" href="#top"><span class="is-hide">ページの先頭へ</span></a>
  </div>
  <!-- /[.gotoTop] -->
  <div class="container">
    <dl class="globalFooter__nav">
      <dt class="globalFooter__nav__logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/share/img/logo_menu.png" alt="株式会社リップル"></a></dt>
      <dd class="globalFooter__nav__body">
        <ul>
          <li class="globalFooter__nav__item"><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li class="globalFooter__nav__item"><a href="<?php echo home_url('/'); ?>service/">サービス</a></li>
          <li class="globalFooter__nav__item"><a href="<?php echo home_url('/'); ?>company/">会社案内</a></li>
          <li class="globalFooter__nav__item"><a href="<?php echo home_url('/'); ?>news/">お知らせ</a></li>
          <li class="globalFooter__nav__item"><a href="<?php echo home_url('/'); ?>recruit/">採用情報</a></li>
          <li class="globalFooter__nav__item"><a href="http://www.ishizue-c.jp/contact" target="_blank">お問い合わせ</a></li>
          <!-- <li class="globalFooter__nav__item"><a href="">個人情報保護方針</a></li> -->
        </ul>
      </dd>
    </dl>
    <p class="copyright">Copyright &copy; Ripple co.,ltd. All Rights Reserved.</p>
  </div>
</footer>
<!-- /[.globalFooter] -->
</div>
<!-- /[.page] -->
<?php
  $path_js = get_template_directory_uri();

  wp_enqueue_script('lib', $path_js.'/share/lib/js/libs.js', array(), false, true);
  wp_enqueue_script('fn', $path_js.'/share/js/fn.js', array('lib'), false, true);

  wp_footer();
?>
<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXVlVnurDGO1QXugh2RB2kkVZERRc7BO4"></script>
<script src="<?php echo get_template_directory_uri(); ?>/share/js/map.js"></script>
-->
<?php if (is_front_page()) { ?>
<script type="text/javascript">
  $(function() {
    $('#data-mainVisual').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: true,
      fade: true
    });
    $('.menu-panels .unit').matchHeight();
  });
</script>
<?php } ?>
<?php
  global $post;
  if($post->post_parent != 0){
    $parent = get_page_uri($post->post_parent);
    if ($parent == 'service') {
?>
<script type="text/javascript">
  $(function() {
    $('#data-slide').slick({
      dots: false,
      autoplay: false,
      autoplaySpeed: 5000,
      arrows: true,
      fade: true,
      asNavFor: '.thumb-item-nav'
    });
    $('.thumb-item-nav').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '#data-slide',
      focusOnSelect: true,
    });
  });
</script>
<?php
    }
  }
?>
</body>
<!-- /[body] -->
</html>
