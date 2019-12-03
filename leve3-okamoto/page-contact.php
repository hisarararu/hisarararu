<?php get_header(); ?>

<!-- mv-pc -->
<div id="mv-pc-contact">
  <div class="inner mv-pc-contact-inner">
  </div>
</div>

<!-- mv-sp  --> 
<div id="mv-sp-contact">
    <div class="inner">
    </div>
</div>

<!--contact-->
<div id="contact">
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
      <h2 class="headline-title">お問い合わせ</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="" class="headline-bg">
    </div>

    <div class="headlineunder">
      <p>どんなことでもお気軽にお問い合わせください。</p>
    </div> 

    <?php echo do_shortcode('[contact-form-7 id="41" title="お問い合わせ"]'); ?>
    
  </div><!-- /inner -->
</div><!-- /contact -->

<div class="footer-bridge"></div>

<?php get_footer(); ?>