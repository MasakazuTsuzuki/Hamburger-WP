<!DOCTYPE html>
<!-- 言語属性を出力 -->
<html <?php language_attributes(); ?>>

<head>
    <!-- 文字コードUTF-8を出力 -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('--', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- アクションフックwp_headを登録。ページのタイトルやCSS・JSへのリンクなどを出力する -->
    <?php wp_head(); ?>
</head>

<!-- 現在のページに応じてCSSクラス属性を出力 -->

<body <?php body_class(); ?>>

    <!-- アクションフックwp_body_openを登録。JSを出力する -->
    <?php wp_body_open(); ?>
        <div class="l-wrapper black-bg">
            <main class="l-main">
                <!-- header -->
                <header class="l-header">
                    <button type="button" class="c-button__menu">
                        <span id="js-menu-button">Menu</span>
                    </button>
                    <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>

                    <?php get_search_form(); ?>
                </header>