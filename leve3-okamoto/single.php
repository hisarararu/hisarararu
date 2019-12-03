<?php get_header(); ?>

<!--single-->

<div id="single">
  <div class="inner">

  <?php 
  if ( function_exists('bcn_display')&& !is_front_page()) {
   echo "<div class='bcn'>";
   bcn_display();
   echo "</div>";
  }
  ?>

    <?php if(have_posts()): the_post(); ?>
      <article <?php post_class( 'article-content' ); ?>>
        <div class="article-info">
          <h1><?php the_title(); ?></h1>
          <!--投稿日を取得-->
          <span class="article-date">
            <time
              datetime="<?php echo get_the_date( 'Y年m月d日' ); ?>">
              <?php the_time('Y年n月j日'); ?></time>
            </time>
          </span>
          <!--カテゴリ取得-->
          <?php if(has_category() ): ?>
          <span class="cat-data">
            <?php echo get_the_category_list( ' ' ); ?>
          </span>
          <?php endif; ?>
          <!--アイキャッチ取得-->
          <div class="article-img">
            <?php if( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
          </div>
          <?php the_content(); ?>
        </div><!-- article-info -->
      </article>
    <?php endif; ?>

  
  </div><!-- inner -->
</div><!-- single -->


<!-- footer -->

<div class="footer-bridge"></div>

<?php get_footer(); ?>