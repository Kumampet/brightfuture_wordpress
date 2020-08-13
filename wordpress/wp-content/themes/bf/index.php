<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Future トップページ</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap&subset=japanese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap&subset=japanese" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1459fe4db2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jump_to_top.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
    <!--object-sit（IE対策）-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.js"></script>

    <!-- WordPress Header Command -->
</head>

<body>
    <header>
        <nav id="pc-navi">
            <a class="logo-link" href="<?php get_home_url();?>">
                <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo_white_2x.png" alt="logo">
            </a>
            <ul>
                <li><a class="menu-link" href="<?php get_home_url();?>">ホーム</a></li>
                <li><a class="menu-link" href="<?php get_home_url();?>/news">ニュース</a></li>
                <li><a class="menu-link" href="<?php get_home_url();?>/service">業務内容</a></li>
                <li><a class="menu-link" href="<?php get_home_url();?>/about">会社説明</a></li>
                <li><a class="menu-link" href="<?php get_home_url();?>/contact">問い合わせ</a></li>
            </ul>
        </nav>

        <nav id="sp-navi">
            <a class="logo-link" href="<?php get_home_url();?>"><img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo_white_2x.png" alt="logo"></a>
            <div class="navi-btn">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="sp-menu">
                <a class="logo-link" href="<?php get_home_url();?>"><img id="logo-img-menu" src="<?php echo get_template_directory_uri(); ?>/img/header_logo_black_2x.png"
                        alt="logo"></a>
                <li><a class="menu-link-sp" href="<?php get_home_url();?>">ホーム</a></li>
                <li><a class="menu-link-sp" href="<?php get_home_url();?>/news">ニュース</a></li>
                <li><a class="menu-link-sp" href="<?php get_home_url();?>/service">業務内容</a></li>
                <li><a class="menu-link-sp" href="<?php get_home_url();?>/about">会社説明</a></li>
                <div>
                    <a class="contact-btn-sp" href="<?php get_home_url();?>/contact">問い合わせ</a>
                </div>
            </ul>
        </nav>

    </header>

    <div class="mainvisual">
        <div id="header-image" class="autoplay">
            <img class="bg" src="<?php echo get_template_directory_uri(); ?>/img/top_1_2x.png" alt="top">
            <img class="bg" src="<?php echo get_template_directory_uri(); ?>/img/top_2_2x.png" alt="top">
            <img class="bg" src="<?php echo get_template_directory_uri(); ?>/img/top_3_2x.png" alt="top">
            <img class="bg" src="<?php echo get_template_directory_uri(); ?>/img/top_4_2x.png" alt="top">
        </div>
        <div class="chatchcopy">
            <div class="chatchcopy-box">
                <p class="cp1">Making your business <br class="hide">a brilliant future</p>
                <p class="cp2">BrightFutureでホームページを制作してあなたのビジネスを輝かしい未来へ導きます。</p>
            </div>
        </div>
        <div class="scroll">
            <p>SCROLL</p>
        </div>
    </div>

    <article>
        <div id="service" class="article-container">
            <div class="article-inner">
                <div class="article-title-area">
                    <h1 class="article-title">SERVICE</h1>
                    <span class="article-title-ja">業務内容</span>
                </div>
                <div class="article-box">
                    <img class="service-img" src="<?php echo get_template_directory_uri(); ?>/img/service_2x.png" alt="service">
                    <div class="article-box2">
                        <h2 class="article-subtitle">あなたのビジネスを輝かしい未来へ導きます。</h2>
                        <p class="article-content">
                            BrightFutureはレスポンシブでデザインされた汎用性の高いベーシックなコーポレートのデザインテンプレートです。
                            御社のロゴ、キーカラーに合わせて強調色を変更いたします。
                            トップページ、WordPress搭載でお客様ご自身で発信できるニュースページ、
                            業務内容ページ、会社案内ページ、フォーム仕様のお問い合わせページをセットで
                            制作いたします。フォントにはGoogleFont「Cormorant Garamond」と「Noto Serif」を使用、
                            デバイスフォントでデザインされた書体を表示できます。
                            記事・ページごとにタイトル、ディスクリプション、キーワードの設定ができるので
                            SEOも対策済みです。
                        </p>
                        <p class="article-btn"><a href="page-service">詳細はこちら</a></p>
                    </div>
                </div>
            </div>

            <div class="article-inner gray">
                <div class="article-title-area">
                    <h1 class="article-title">ABOUT</h1>
                    <span class="article-title-ja">会社案内</span>
                </div>
                <div class="article-box">
                    <img class="service-img" src="<?php echo get_template_directory_uri(); ?>/img/about_2x.png" alt="about">
                    <div class="article-box2">
                        <h2 class="article-subtitle">あなたのビジネスを輝かしい未来へ導きます。</h2>
                        <p class="article-content">
                            BrightFutureはレスポンシブでデザインされた汎用性の高いベーシックなコーポレートのデザインテンプレートです。
                            御社のロゴ、キーカラーに合わせて強調色を変更いたします。
                            トップページ、WordPress搭載でお客様ご自身で発信できるニュースページ、
                            業務内容ページ、会社案内ページ、フォーム仕様のお問い合わせページをセットで
                            制作いたします。フォントにはGoogleFont「Cormorant Garamond」と「Noto Serif」を使用、
                            デバイスフォントでデザインされた書体を表示できます。
                            記事・ページごとにタイトル、ディスクリプション、キーワードの設定ができるので
                            SEOも対策済みです。
                        </p>
                        <p class="article-btn"><a href="page-about">詳細はこちら</a></p>
                    </div>
                </div>
            </div>

            <div class="article-inner article-inner-news ">
                <div class="article-title-area news">
                    <h1 class="article-title">NEWS</h1>
                    <span class="article-title-ja">ニュース</span>
                    <p class="article-btn-ie"><a href="#">ニュース一覧</a></p>
                </div>
                <div class="news-space">
                    <ul class="newslist-container">
                        <li class="news">
                            <a class="news-content" href="#"><span class="date">2000.00.00</span>
                                ここにニュースタイトルが最新記事5件分読み込まれます</a>
                        </li>
                        <li class="news">
                            <a class="news-content" href="#"><span class="date">2000.00.00</span>
                                すみずみまで設計されたデザイン！すべてレスポンシブ対応です</a>
                        </li>
                        <li class="news">
                            <a class="news-content" href="#"><span class="date">2000.00.00</span>
                                写真とテキストを差し替えるだけですぐに公開が可能！</a>
                        </li>
                        <li class="news">
                            <a class="news-content" href="#"><span class="date">2000.00.00</span>
                                御社のロゴ、キーカラーに合わせて強調色を変更いたします</a>
                        </li>
                        <li class="news">
                            <a class="news-content" href="#"><span class="date">2000.00.00</span>
                                ページの追加などはオプションで承ります。お気軽にお申し付けください</a>
                        </li>
                    </ul>
                </div>
                <p class="article-btn news"><a href="#">ニュース一覧</a></p>
            </div>
        </div>
    </article>

   
<?php get_footer(); ?>