<?php get_header(); ?>

<!-- mv-pc -->
<div id="mv-pc-news">
  <div class="inner mv-pc-news-inner">
  </div>
</div>

<!-- mv-sp  --> 
<div id="mv-sp-news">
    <div class="inner">
    </div>
</div>

<!-- bcn -->

<!--news-->

<div id="news">
  <div class="inner">
  <?php 
    if ( function_exists('bcn_display')&& !is_front_page()) {
    echo "<div class='bcn bcn-nohome'>";
    bcn_display();
    echo "</div>";
    }
  ?>

      <div class="headline">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/h-icon-4-news.png" alt="アイコン" class="headline-icon">
          <h2 class="headline-title">お知らせ</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="headline-bg">
        </div>  

      <div class="headlineunder">
        <p>しま農園の愉快な日々を綴っています。</p>
      </div>  

      <div class="news-contents">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()):the_post(); ?>

          <div class="news-content-outer">
            <a href="<?php the_permalink();?>">
              <div class="news-content">
                  <div class="news-content-inner">
                    <p class="thumb">
                      <?php the_post_thumbnail('thumbnail-test1'); ?>
                    </p>

                    <p class="tag">            
                      <?php 
                        $category = get_the_category();  
                        echo $category[0]->cat_name;
                      ?>
                    </p>

                    <time class="news-content-time" datetime="<?php the_time('c'); ?>" ><?php the_time('Y年n月j日'); ?></time>
                    <div class="news-content-title"><?php the_title(); ?></div>
                  </div>
              </div>
            </a>
          </div>

          <?php endwhile;?>
        <?php endif; ?>
    </div><!-- news-contents -->

<?php 
  the_posts_navigation( array(
    'prev_text'           => '&lt; 前のページへ',
    'next_text'           => '次のページへ &gt;',
    'screen_reader_text'  => ' ',
  ) ); 
?>

  </div><!-- inner -->
</div><!-- news -->

<!-- footer -->

<div class="footer-bridge"></div>

<?php get_footer(); ?>