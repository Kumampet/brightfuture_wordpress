<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title(); ?></title>

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news-list.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap&subset=japanese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap&subset=japanese" rel="stylesheet">

    <!-- Font Awesome設定 -->
    <script>
        FontAwesomeConfig = { searchPseudoElements: true };
    </script>
    <script src="https://kit.fontawesome.com/1459fe4db2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="./js/service.js"></script>
    <script src="./js/jump_to_top.js"></script>
</head>

<body>
    <header>
        <nav id="pc-navi">
            <a class="logo-link" href="./index.html">
                <img id="logo-img" src="./img/header_logo_black_2x.png" alt="logo">
            </a>
            <ul>
                <li><a class="menu-link" href="index.html">ホーム</a></li>
                <li><a class="menu-link view" href="#">ニュース</a></li>
                <li><a class="menu-link" href="service.html">業務内容</a></li>
                <li><a class="menu-link" href="./about.html">会社説明</a></li>
                <li><a class="menu-link" href="./contact.html">問い合わせ</a></li>
            </ul>
        </nav>

        <nav id="sp-navi">
            <a class="logo-link" href="#"><img id="logo-img" src="./img/header_logo_black_2x.png" alt="logo"></a>
            <div class="navi-btn">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="sp-menu">
                <a class="logo-link" href="#"><img id="logo-img-menu" src="./img/header_logo_black_2x.png"
                        alt="logo"></a>
                <li><a class="menu-link-sp" href="index.html">ホーム</a></li>
                <li><a class="menu-link-sp" href="./news-list.html">ニュース</a></li>
                <li><a class="menu-link-sp" href="service.html">業務内容</a></li>
                <li><a class="menu-link-sp" href="./about.html">会社説明</a></li>
                <div>
                    <a class="contact-btn-sp" href="./contact.html">問い合わせ</a>
                </div>
            </ul>
        </nav>

    </header>

    <article>
        <div class="header-img-container">
            <div class="main-title-container">
                <h1 class="main-title-en">
                    <?php echo the_title(); ?>
                    <span class="main-title-ja">なんか書け</span>
                </h1>
            </div>
        </div>

        <div class="main-content-area">
            <ul class="breadcrumbs">
                <li><a class="bread-link" href="./index.html">ホーム</a></li>
                <li><a class="bread-link" href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></li>
            </ul>
            <!-- メインコンテンツ -->
     
        </div>

            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
           	
            <?php endwhile; endif; ?>
           

    <footer>
        <div class="footer-main">
            <a id="page-top-jummper" href="#">PAGE top</a>
            <a class="company-logo-link" href="#"><img class="company-logo" src="./img/footer_logo.svg" alt="logo"></a>
            <div class="company-info">
                <p class="info1">株式会社ブライトフューチャー<br class="hide">〒000-0000 東京都港区青山0-0-0</p>
                <p class="info2">TEL:00-0000-0000　FAX:00-0000-0000 <br class="hide">E:mail <a
                        class="email">info@sample.com</a></p>
            </div>
            <div class="sns-icons">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright &copy; BrightFuture All rights reserved.</p>
        </div>
    </footer>
</body>

</html>