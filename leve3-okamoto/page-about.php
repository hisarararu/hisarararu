<?php get_header(); ?>

<!-- mv-pc -->
<div id="mv-pc-about">
  <div class="inner mv-pc-about-inner">
  </div>
</div>

<!-- mv-sp  --> 
<div id="mv-sp-about">
    <div class="inner">
    </div>
</div>

<!-- aboutshima -->
<div id="aboutshima">
  <div class="inner">
  
  <?php 
    if ( function_exists('bcn_display')&& !is_front_page()) {
    echo "<div class='bcn bcn-nohome'>";
    bcn_display();
    echo "</div>";
    }
  ?>

    
    <div class="headline">
      <img src="<?php echo get_template_directory_uri(); ?>/img/company-icon.png" alt="" class="headline-icon">
      <h2 class="headline-title">しま農園とは</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="headline-bg">
    </div>

    <div class="aboutshima-content">
      <img src="<?php echo get_template_directory_uri(); ?>/img/intro.png" alt="しま農園の畑">
      <div class="aboutshima-content-txt">
        <p>〇〇県〇〇郡、標高800メートル、人口3000人弱の小さな村に私たちの農園はあります。緑豊かなこの土地で、土や品種に徹底的にこだわりながら有機野菜を育てています。<br><br>新しいモノ・コト・農業の可能性を考え、農業の力で社会的な課題を解決するコトで新たな価値提供していきます。<br><br>・・・ちょっと真面目に語ってしまいましたが。野菜にかけた愛情は食べた人に必ず伝わります。真面目すぎるくらいがいいんです。</p>
      </div>
    </div>

  </div><!-- /inner -->
</div><!-- /aboutshima -->

<img src="<?php echo get_template_directory_uri(); ?>/img/top-img/bridge2.png" alt="" class="bridge2-blank">

<!-- company -->
<div id="company">
  <div class="inner">

    <div class="headline">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/h-icon-2.png" alt="" class="headline-icon">
      <h2 class="headline-title">会社概要</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="headline-bg">
    </div>

    <div class="headlineunder">
      <p>しま農園は野菜のことで頭がいっぱいの、とにかく真面目な会社です。</p>
    </div> 

    <div class="company-content">
      <div class="company-content-left">
        <p>会社名<br><br>創立<br><br>所在地<br><br>資本金<br><br>従業員数<br><br></p>
      </div>
      <div class="company-content-right">
        <p>有限会社しま農園<br><br>1993年<br><br>〇〇県〇〇郡〇〇村<br><br>1000万円<br><br>50人</p>
      </div>

    </div>

  </div>
</div>

<!-- footer -->

<div class="footer-bridge"></div>


<?php get_footer(); ?>