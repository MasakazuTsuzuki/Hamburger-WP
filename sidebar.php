<aside class="l-sidebar">
    <h2>Menu</h2>

    <?php
    wp_nav_menu(array('theme_location' => 'category_menu'));
    ?>

    <!--スマホ用-->
    <button class="c-button__close">
        <img id="close-button" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon_close.png" alt="">
    </button>
</aside>