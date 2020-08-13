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

                    </ul>
                </div>
            </div>
        </article>

        <div class="listpage-selecter">
            <?php if (get_previous_posts_link()) : ?>
                <a class="pager prev" href="<?php previous_posts_link(); ?>">PREV</a>
            <?php endif; ?>
            <ul class="page-list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="page-num">
                            <a href="<?php the_permalink(); ?>"></a>
                        </li>
                        <?php the_excerpt(); ?>
                        <!-- <li class="page-num"><a class="page-link now-page" href="#">1</a></li>
                <li class="page-num"><a class="page-link" href="#">2</a></li>
                <li class="page-num"><a class="page-link" href="#">3</a></li>
                <li class="page-num"><a class="page-link" href="#">4</a></li>
                <li class="page-num"><a class="page-link" href="#">･･･</a></li> -->
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php endif; ?>
            </ul>
            <?php if (get_next_posts_link()) : ?>
                <a class="pager next" href="<?php next_posts_link(); ?>">NEXT</a>
            <?php endif; ?>
        </div>

    </div>
</article>



<?php get_footer(); ?>