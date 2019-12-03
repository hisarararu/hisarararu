<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">

  <?php if ( is_front_page() ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">    
  
  <?php elseif(is_page( '29' )): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">

  <?php elseif(is_page( '33' )): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/store.css">

  <?php elseif(is_page( '35' )): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">

  <?php elseif(is_home()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">

  <?php elseif(is_single()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">

  <?php else: ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php endif;?>

  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous">
</script>

  <!-- drawer.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
  <!-- jquery & iScroll -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
  <!-- drawer.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>

  <script src="<?php echo get_template_directory_uri() ?>/level4-3.js" type="text/javaScript" charset="utf-8"></script>

  <?php wp_head(); ?>
</head>
<body class="drawer drawer--right">

<!-- header -->
<header id="header">
    <div class="inner">
      <!-- header-nav -->
      <nav class="header-nav">    
        <ul class="header-list header-nav-pc">
            
            <li class="header-item" id="header-item-1">
              <a href="<?php echo home_url() ?>/about/" class= 
                <?php if(is_page( '29' )): ?>
                <?php echo "border-yellow"; ?>
                <?php endif; ?>
              >当園について</a>
            </li>

            <li class="header-item" id="header-item-2">
              <a href="<?php echo home_url() ?>/news/" class= 
                  <?php if(is_home()||is_single()): ?>
                  <?php echo "border-yellow"; ?>
                  <?php endif; ?>
              >お知らせ</a></li>

            <li class="header-item" id="header-item-logo">
              <!-- 条件式 -->
              <?php if (!is_single()) : ?>
                <?php echo "<h1>"; ?>
              <?php endif; ?>
                <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/header-logo.png" alt="しま農園" class="header-item-logo"></a>
              <?php if (!is_single()): ?>
              <?php echo "</h1>"; ?>
              <?php endif; ?>
            </li>

            <li class="header-item" id="header-item-3">
              <a href="<?php echo home_url() ?>/store/" class= 
                  <?php if(is_page( '33' )): ?>
                  <?php echo "border-yellow"; ?>
                  <?php endif; ?>
              >品目・ストア</a>
            </li>
            
            <li class="header-item" id="header-item-4">
              <a href="<?php echo home_url() ?>/contact/" class= 
                  <?php if(is_page( '35' )): ?>
                  <?php echo "border-yellow"; ?>
                  <?php endif; ?>              
              >お問い合わせ</a>
            </li>
        </ul>

      </nav><!-- /header-nav -->    

      <div class="header-sp">
        <div class="header-sp-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/header-logo.png" alt="しま農園" class="header-item-logo-sp">
        </div>     

        <div role="banner">
            <!-- ハンバーガーボタン -->
            <button type="button" class="drawer-toggle drawer-hamburger">
              <span class="sr-only">toggle navigation</span>
              <span class="drawer-hamburger-icon"></span>
            </button>
            <!-- ナビゲーションの中身 -->
            <nav class="drawer-nav">
              <ul class="drawer-menu">
                <li><a class="drawer-menu-item anchorlink" href="<?php echo home_url() ?>/about/" >当園について</a></li>
                <li><a class="drawer-menu-item anchorlink" href="<?php echo home_url() ?>/news/">お知らせ</a></li>
                <li><a class="drawer-menu-item anchorlink" href="<?php echo home_url() ?>/store/">品目・ストア</a></li>
                <li><a class="drawer-menu-item anchorlink" href="<?php echo home_url() ?>/contact/">お問い合わせ</a></li>
              </ul>
            </nav>
          </div>
      </div>

    </div><!-- /inner -->
</header><!-- /header -->