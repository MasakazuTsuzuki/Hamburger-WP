<!-- header -->
<?php get_header(); ?>


<div class="l-single-main__contents">
    <div class="l-single-main__contents__bg">
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="l-single-main__contents__title">
        <h2>各情報の概要の見出し</h2>
        <p>情報の概要がここに表示されます。
        </p>
        <h3>各情報の詳細の見出し</h3>
        <p>情報の詳細がここに表示されます。
        </p>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <h4>写真や図</h4>
        <p>写真や図の説明・補助文が入ります。</p>
    </div>
</div>
</main>

<!-- sidebar -->
<?php get_sidebar(); ?>

<!-- footer -->
<?php get_footer(); ?>