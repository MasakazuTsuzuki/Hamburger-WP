<?php

// 基本設定
function mytheme_setup() {

    // ページのタイトルを出力
    add_theme_support( 'title-tag' );

    // HTML5対応
    add_theme_support( 'html5',array( 'style', 'script' ) );
}

add_action( 'after_setup_theme', 'mytheme_setup' );