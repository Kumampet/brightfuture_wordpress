<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title(); ?></title>

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
            <a class="logo-link" href="index">
                <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo_white_2x.png" alt="logo">
            </a>
            <ul>
                <li><a class="menu-link" href="index">ホーム</a></li>
                <li><a class="menu-link" href="page-news">ニュース</a></li>
                <li><a class="menu-link" href="page-service">業務内容</a></li>
                <li><a class="menu-link" href="page-about">会社説明</a></li>
                <li><a class="menu-link" href="page-contact">問い合わせ</a></li>
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
                <li><a class="menu-link-sp" href="index">ホーム</a></li>
                <li><a class="menu-link-sp" href="page-news">ニュース</a></li>
                <li><a class="menu-link-sp" href="page-service">業務内容</a></li>
                <li><a class="menu-link-sp" href="page-about">会社説明</a></li>
                <div>
                    <a class="contact-btn-sp" href="./contact.html">問い合わせ</a>
                </div>
            </ul>
        </nav>

    </header>