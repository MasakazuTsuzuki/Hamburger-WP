<!-- header -->
<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <main class="l-single-main_contents">
            <div class="l-single-main_contents_bg">
                <h2><?php the_title(); ?></h2>
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img1.jpg" alt="Hamburger"></figure>
            </div>
            <div class="l-single-main_contents_title">
                <h2>見出し h2</h2>
                <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                </p>
                <h3 class="large">見出しh3</h3>
                <h4>見出しh4</h4>
                <h3>見出しh3</h3>
                <h4>見出しh4</h4>
                <h5>見出しh5</h5>
                <h6>見出しh6</h6>
                <blockquote cite="引用元url">
                    <p>Blockquote
                        引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                    </p>
                    出典元：<cite><a href="引用元url">○○○○○○○○○○○○</a></cite>
                </blockquote>
            </div>
            <section>
                <div class="l-single-sub_menu">
                    <figure><img src="img/single-img2.jpg" alt="ハンバーガー"></figure>
                    <div class="l-single-sub_menu_bg">
                        <figure><img src="img/single-img3.jpg" alt="チーズバーガー"></figure>
                        <div class="l-single-sub_menu_contents">
                            <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                            </p>
                        </div>
                    </div>
                    <div class="l-single-sub_menu_bg">
                        <div class="l-single-sub_menu_contents">
                            <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                            </p>
                        </div>
                        <figure><img src="img/single-img3.jpg" alt="チーズバーガー"></figure>
                    </div>
                    <div class="l-single-sub_menu">
                        <figure><img src="img/single-img3.jpg" alt="ハンバーガー"></figure>
                    </div>
                </div>
            </section>
        </main>
        <div class="l-single-wrapper grid">
            <dic class="l-single-sub_menu-item">
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
            <dic class="l-single-sub_menu-item">
                <figure><img src="i<?php echo esc_url(get_template_directory_uri()); ?>/mg/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
            <dic class="l-single-sub_menu-item">
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
            <dic class="l-single-sub_menu-item">
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
            <dic class="l-single-sub_menu-item">
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
            <dic class="l-single-sub_menu-item">
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
            <dic class="l-single-sub_menu-item">
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
            <dic class="l-single-sub_menu-item">
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
            <dic class="l-single-sub_menu-item">
                <figure><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-img4.jpg" alt="ハンバーガー"></figure>
            </dic>
        </div>
        <div class="l-single-sub_menu_item">
            <ol class="l-single-sub_menu_list1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ol>
            <ol class="l-single-sub_menu_list2">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
            </ol>
            <ol class="l-single-sub_menu_list1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ol>
            <ul class="l-single-sub_menu_list1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
            <ul class="l-single-sub_menu_list2">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
            </ul>
            <ul class="l-single-sub_menu_list1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
        </div>
        </div>
        <table>
            <tr>
                <td class="colum1">テーブル</td>
                <td class="colum2">テーブル</td>
            </tr>
            <tr>
                <td class="colum1">テーブル</td>
                <td class="colum2">テーブル</td>
            </tr>
            <tr>
                <td class="colum1">テーブル</td>
                <td class="colum2">テーブル</td>
            </tr>
            <tr>
                <td class="colum1">テーブル</td>
                <td class="colum2">テーブル</td>
            </tr>
        </table>
        <div class="button">
            <button><a href="">ボタン</a></button>
            <p>boldboldboldboldboldboldbold</p>
        </div>
        </article>

    <?php
    endwhile;
else :
    ?>
    <p>表示する記事がありません</p>
<?php
endif;
?>

<!-- sidebar -->
<?php get_sidebar(); ?>


<!-- footer -->
<?php get_footer(); ?>