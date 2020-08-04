<?php get_header(); ?>

<article>
    <div class="header-img-container">
        <div class="main-title-container">
            <h1 class="main-title-en">
                NEWS
                <span class="main-title-ja">ニュース</span>
            </h1>
        </div>
    </div>

    <div class="main-content-area">
        <ul class="breadcrumbs">
            <li><a class="bread-link" href="index">ホーム</a></li>
            <li>ニュース</li>
        </ul>
        <!-- メインコンテンツ -->
        <div class="news-serch">
            <div class="pull-dw category">
                <h3 class="pull-ttl">CATEGORY</h3>
                <div class="select-wrap category">
                    <select class="news-selecter" name="category" id="category">
                        <option value="" hidden>カテゴリーを選択</option>
                    </select>
                </div>
            </div>
            <div class="pull-dw archives">
                <h3 class="pull-ttl">ARCHIVES</h3>
                <div class="select-wrap archives">
                    <select class="news-selecter" name="archives" id="archives">
                        <option value="" hidden>日付を選択</option>
                    </select>
                </div>
            </div>
        </div>

        <article class="article-bg">
            <div class="article-container">
                <h2 class="article-title">すべてのカテゴリー</h2>
                <div class="list-box">
                    <ul class="newslist-container">

                        <?php

                        $args = array(
                            'post',
                        );
                        $the_query = new WP_Query($args);

                        // Loop
                        if ($the_query->have_posts()) {
                            echo '<ul>';
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                                echo '<li class="news"><a class="news-content" href=' . get_post_permalink() . '><span class="date">' . get_the_date() . '</span>' . get_the_title() . '</a></li>';
                            }
                            echo '</ul>';
                            wp_reset_postdata();
                        } else {
                            // 特に何もないよ
                        }

                        ?>


                        <!--
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    ここにニュースタイトルが最新記事5件分読み込まれます</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    すみずみまで設計されたデザイン！すべてレスポンシブ対応です</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    写真とテキストを差し替えるだけですぐに公開が可能！</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    御社のロゴ、キーカラーに合わせて強調色を変更いたします</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    ページの追加などはオプションで承ります。お気軽にお申し付けください</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    ここにニュースタイトルが最新記事5件分読み込まれます</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    すみずみまで設計されたデザイン！すべてレスポンシブ対応です</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    写真とテキストを差し替えるだけですぐに公開が可能！</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    御社のロゴ、キーカラーに合わせて強調色を変更いたします</a>
                            </li>
                            <li class="news">
                                <a class="news-content" href="./news-article.html"><span class="date">2000.00.00</span>
                                    ページの追加などはオプションで承ります。お気軽にお申し付けください</a>
                            </li>
-->
                    </ul>
                </div>
            </div>
        </article>

        <div class="listpage-selecter">
            <a class="pager prev" href="#">PREV</a>
            <ul class="page-list">
                <li class="page-num"><a class="page-link now-page" href="#">1</a></li>
                <li class="page-num"><a class="page-link" href="#">2</a></li>
                <li class="page-num"><a class="page-link" href="#">3</a></li>
                <li class="page-num"><a class="page-link" href="#">4</a></li>
                <li class="page-num"><a class="page-link" href="#">･･･</a></li>
            </ul>
            <a class="pager next" href="#">NEXT</a>
        </div>

    </div>
</article>



<?php get_footer(); ?>