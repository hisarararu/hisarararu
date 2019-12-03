<?php get_header(); ?>

<!-- mv-pc -->
<div id="mv-pc-store">
  <div class="inner mv-pc-store-inner">
  </div>
</div>

<!-- mv-sp  --> 
<div id="mv-sp-store">
    <div class="inner">
    </div>
</div>

<!--item-->
<div id="item">
  <div class="inner">
  <?php 
    if ( function_exists('bcn_display')&& !is_front_page()) {
    echo "<div class='bcn bcn-nohome'>";
    bcn_display();
    echo "</div>";
    }
  ?>

    <div class="headline">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/h-icon-2.png" alt="アイコン" class="headline-icon">
      <h2 class="headline-title">品目</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="headline-bg">
    </div>

    <div class="headlineunder">
      <p>しま農園のかわいい子たちを紹介します。</p>
    </div> 

    <div class="item-gallerys">
      <div class="item-gallerys-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kind1.jpg" alt="">
        <p>ほうれん草</p>
      </div>
      <div class="item-gallerys-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kind2.jpg" alt="">
        <p>トマト</p>
      </div>
      <div class="item-gallerys-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kind3.jpg" alt="">
        <p>たまねぎ</p>
      </div>
      <div class="item-gallerys-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kind4.jpg" alt="">
        <p>レタス</p>
      </div>
      <div class="item-gallerys-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kind5.jpg" alt="">
        <p>キャベツ</p>
      </div>
      <div class="item-gallerys-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kind6.jpg" alt="">
        <p>なす</p>
      </div>
      <div class="item-gallerys-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kind7.jpg" alt="">
        <p>にんじん</p>
      </div>
      <div class="item-gallerys-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kind8.jpg" alt="">
        <p>ブロッコリー</p>
      </div>
    </div><!-- item-gallerys -->

  </div><!-- /inner -->
</div><!-- /item -->

<img src="<?php echo get_template_directory_uri(); ?>/img/top-img/bridge2.png" alt="" class="bridge2-blank">

<!-- <div class="bridge2"></div> -->

<!-- online -->
<div class="online">
  <div class="inner">
    <div class="headline">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/h-icon-3.png" alt="アイコン" class="headline-icon">
        <h2 class="headline-title">オンラインストア</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="headline-bg">
    </div>  

    <div class="headlineunder">
      <p>しま農園では毎週火曜日に<br class="br-sp">定期便を配達しています。</p>
    </div>  

    <div class="online-items">

      <div class="online-items-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/store1.jpg" alt="おてがるSセット">
        <h4><span class="under">おてがる<span class="size">S</span>セット</span></h4>
        <p class="fz20 online-price">1480円(税込)</p>
        <p class="online-txt">２〜３人用</p>
        <p class="online-txt">旬の野菜５種</p>
      </div>
    
      <div class="online-items-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/store2.jpg" alt="わいわいMセット">
        <h4><span class="under">わいわい<span class="size">M</span>セット</span></h4>
        <p class="fz20 online-price">1980円(税込)</p>
        <p class="online-txt">５〜6人用</p>
        <p class="online-txt">旬の野菜7〜８種</p>
      </div>
      
      <div class="online-items-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/store3.jpg" alt="まんぷくLセット">
        <h4><span class="under">まんぷく<span class="size">L</span>セット</span></h4>
        <p class="fz20 online-price">2980円(税込)</p>
        <p class="online-txt">７〜８人用</p>
        <p class="online-txt">旬の野菜10〜12種</p>
      </div>
    </div><!-- online-items -->

    <div class="btn btn-online">
      <a href="#">もっと見る</a> 
    </div>

  </div>
</div>

<!-- footer -->
<div class="footer-bridge"></div>

<?php get_footer(); ?>