<?php 

add_theme_support('post-thumbnails');

//アイキャッチ画像の定義と切り抜き
add_action( 'after_setup_theme', 'baw_theme_setup' );

function baw_theme_setup() {
 add_image_size('thumbnail-test1', 310, 206 ,true );
}

// アイキャッチのサイズ指定削除
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}

add_theme_support ('title-tag');


