<aside class="l-sidebar">
    <h2 id="js__sideMenuBtn">Menu</h2>

    <!--スマホ用-->
    <button class="c-button__close">
        <img id="close-button" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_close.png" alt="">
    </button>

    <?php
    wp_nav_menu(array('theme_location' => 'category_menu'));
    ?>

</aside>