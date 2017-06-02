<li class="news-list__item">
  <a href="<?php the_permalink(); ?>">
    <time class="news-list__item--time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
<?php
  $array_cats = get_the_category();
  $info_cat = $array_cats[0];
?>
    <span class="news-list__item--category is-<?php echo $info_cat->slug; ?>"><?php echo $info_cat->name; ?></span>
    <p class="news-list__item--body"><?php the_title(); ?></p>
  </a>
</li>
