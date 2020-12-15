<!-- header -->
<?php get_header(); ?>

<!-- hero -->
<section class="p-hero archive">
    <h2>Search:<br class="SP">
        <?php single_cat_title(); ?>
    </h2>
</section>


                    <section>
                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                        ?>
                                <div class="l-archive-sub_menu">
                                    <div class="l-archive-sub_menu_contents">
                                        <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive-img2.jpg" alt="チーズバーガー"></figure>
                                        <div class="l-archive-sub_menu_contents_title">
                                            <h2>見出しが入ります</h2>
                                            <h3>小見出しが入ります</h3>
                                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                            </p>
                                            <div class="button">
                                                <button href="">詳しく見る</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </section>
                </main>
            </div>

            <!-- ページネーション -->
            <?php wp_pagenavi(); ?>

            <!-- sidebar -->
            <?php get_sidebar(); ?>
    </div>

    <!-- footer -->
    <?php get_footer(); ?>