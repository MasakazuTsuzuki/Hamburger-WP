<aside class="l-sidebar open-1">
    <h2>Menu</h2>

    <!--スマホ用-->
    <!-- <button class="c-button__close">
            <img class="close-btn" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_close.png" alt="">
        </button> -->

    <button type="button" class="c-button__close">
        <span class="btn close-btn">×</span>
    </button>

    <?php
    wp_nav_menu(array('theme_location' => 'category_menu'));
    ?>

</aside>