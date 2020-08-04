<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title() ;?></title>

    <!-- <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./slick/slick.css"> -->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap&subset=japanese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap&subset=japanese" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">

    <script src="https://kit.fontawesome.com/1459fe4db2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jump_to_top.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
    <!--object-sit（IE対策）-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.js"></script>

    <!-- WordPress Header Command -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav id="pc-navi">
            <a class="logo-link" href="./index.html">
                <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo_white_2x.png" alt="logo">
            </a>
            <ul>
                <li><a class="menu-link view" href="./index.php">ホーム</a></li>
                <li><a class="menu-link" href="./archive.php">ニュース</a></li>
                <li><a class="menu-link" href="./service.html">業務内容</a></li>
                <li><a class="menu-link" href="./about.html">会社説明</a></li>
                <li><a class="menu-link" href="./contact.html">問い合わせ</a></li>
            </ul>
        </nav>

        <nav id="sp-navi">
            <a class="logo-link" href="#"><img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo_white_2x.png" alt="logo"></a>
            <div class="navi-btn">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="sp-menu">
                <a class="logo-link" href="#"><img id="logo-img-menu" src="<?php echo get_template_directory_uri(); ?>/img/header_logo_black_2x.png"
                        alt="logo"></a>
                <li><a class="menu-link-sp" href="#">ホーム</a></li>
                <li><a class="menu-link-sp" href="./archive.php">ニュース</a></li>
                <li><a class="menu-link-sp" href="./service.html">業務内容</a></li>
                <li><a class="menu-link-sp" href="./about.html">会社説明</a></li>
                <div>
                    <a class="contact-btn-sp" href="./contact.html">問い合わせ</a>
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
    
    <div>ああああ</div>

    

    <footer>
        <div class="footer-main">
            <a id="page-top-jummper" href="#">PAGE top</a>
            <a class="company-logo-link" href="#"><img class="company-logo" src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.svg" alt="logo"></a>
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
    <?php wp_footer(); ?>
</body>

</html>