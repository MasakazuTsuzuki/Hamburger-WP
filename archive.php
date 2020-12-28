<!-- header -->
<?php get_header(); ?>

<!-- hero -->
<section class="p-hero archive">
    <div class="bg"></div>
    <h2>Menu:
        <span><?php single_cat_title(); ?></span>
    </h2>
</section>

<!-- message -->
<div class="p-message__archive">
    <h2>小見出しが入ります</h2>
    <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
    </p>
</div>


<!-- article ハンバーガー説明-->

<section>
<div class="p-article__archive">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>

                <div class="p-article__archive__wrapper">
                    <?php the_post_thumbnail(); ?>
                    <div class="p-article__archive__contents">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_content(); ?>
                        <!-- <?php the_tags(); ?> -->
                        <div class="button">
                        <button><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                        </div>
                    </div>
                </div>
        <?php endwhile;
    endif; ?>
</section>


<!-- ページネーション -->
<?php wp_pagenavi(); ?>

<!-- sidebar -->
<?php get_sidebar(); ?>
</div>

<!-- footer -->
<?php get_footer(); ?>