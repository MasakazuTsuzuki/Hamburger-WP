<?php get_header(); ?>

<body>
    <div class="a">
        <article>
            <div class="l-main">
                <header class="l-main_header">
                    <h1>Hamburger</h1>

                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="search-box_text" placeholder="">
                        <button class="search-box_button" type="button" value="検索">検索</button>
                    </div>
                </header>
                <main class="l-archive-main_contents">
                    <div class="l-archive-main_contents_bg">
                        <h2>Menu:<span>チーズバーガー</span></h2>
                        <figure><img src="img/archive-img1.jpg" alt="Hamburger"></figure>
                    </div>
                    <div class="l-archive-main_contents_title">
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                        </p>
                    </div>
                    <section>
                        <div class="l-archive-sub_menu">
                            <div class="l-archive-sub_menu_contents">
                                <figure><img src="img/archive-img2.jpg" alt="チーズバーガー"></figure>
                                <div class="l-archive-sub_menu_contents_title">
                                    <h2>チーズバーガー</h2>
                                    <h3>小見出しが入ります</h3>
                                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                    <div class="button">
                                        <button href="">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                            <div class="l-archive-sub_menu_contents">
                                <figure><img src="img/archive-img2.jpg" alt="チーズバーガー"></figure>
                                <div class="l-archive-sub_menu_contents_title">
                                    <div class="l-archive-sub_menu_contents_title">
                                        <h2>ダブルチーズバーガー</h2>
                                        <h3>小見出しが入ります</h3>
                                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <div class="button">
                                            <button href="">詳しく見る</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="l-archive-sub_menu_contents">
                                <figure><img src="img/archive-img2.jpg" alt="チーズバーガー"></figure>
                                <class class="l-archive-sub_menu_contents_title">
                                    <div class="l-archive-sub_menu_contents_title">
                                        <h2>スペシャルチーズバーガー</h2>
                                        <h3>小見出しが入ります</h3>
                                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <div class="button">
                                            <button href="">詳しく見る</button>
                                        </div>
                                    </div>
                                </class>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
            <ul class="pagenation">
                <span>page 1/10</span>
                <li><a href="1.html">&laquo; </a></li>
                <li><span>1</span></li>
                <li><a href="1.html">2</a></li>
                <li><a href="3.html">3</a></li>
                <li><a href="4.html">4</a></li>
                <li><a href="5.html">5</a></li>
                <li><a href="6.html">6</a></li>
                <li><a href="3.html">&raquo;</a></li>
            </ul>

        </article>

        <?php get_sidebar(); ?>

        <?php get_footer(); ?>