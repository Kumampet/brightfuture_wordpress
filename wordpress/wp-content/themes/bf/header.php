<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        /*
        global $page, $paged;
        if (is_front_page()) : //トップページ
            bloginfo('トップページ');
        elseif (is_home()) : //ブログページ（ブログサイトの場合はトップページ）
            wp_title('|', true, 'right');
            bloginfo('name');
        elseif (is_single()) : //記事ページ
            wp_title('');
        elseif (is_page()) : //固定ページ
            wp_title('|', true, 'right');
            bloginfo('name');
        elseif (is_author()) : //著者ページ
            wp_title('|', true, 'right');
            bloginfo('name');
        elseif (is_archive()) : //アーカイブページ（カテゴリーページなど）
            wp_title('|', true, 'right');
            bloginfo('name');
        elseif (is_search()) : //検索結果ページ
            wp_title('');
        elseif (is_404()) : //404ページ
            echo '404|';
            bloginfo('404');
        endif;
        */
        if ($paged >= 2 || $page >= 2) : //２ページ目以降の場合
            echo '-' . sprintf(
                '%sページ',
                max($paged, $page)
            );
        endif;
        ?>
    </title>

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Noto+Sans+JP|Noto+Serif+JP&display=swap" rel="stylesheet">

    <!-- Google font  -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap&subset=japanese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap&subset=japanese" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1459fe4db2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="./js/service.js"></script>
    <script src="./js/jump_to_top.js"></script>
</head>

<body>
    <header>
        <nav id="pc-navi">
            <a class="logo-link" href="./index.php">
                <img id="logo-img" src="./img/header_logo_black_2x.png" alt="logo">
            </a>
            <ul>
                <li><a class="menu-link" href="./index.php">ホーム</a></li>
                <li><a class="menu-link" href="./archive.php">ニュース</a></li>
                <li><a class="menu-link" href="./service.php">業務内容</a></li>
                <li><a class="menu-link" href="./about.php">会社説明</a></li>
                <li><a class="menu-link" href="./contact.php">問い合わせ</a></li>
            </ul>
        </nav>

        <nav id="sp-navi">
            <a class="logo-link" href="./index.php"><img id="logo-img" src="./img/header_logo_black_2x.png" alt="logo"></a>
            <div class="navi-btn">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="sp-menu">
                <a class="logo-link" href="./iondex.php"><img id="logo-img-menu" src="./img/header_logo_black_2x.png" alt="logo"></a>
                <li><a class="menu-link-sp" href="./index.php">ホーム</a></li>
                <li><a class="menu-link-sp" href="./archive.php">ニュース</a></li>
                <li><a class="menu-link-sp" href="./service.php">業務内容</a></li>
                <li><a class="menu-link-sp" href="./about.php">会社説明</a></li>
                <div>
                    <a class="contact-btn-sp" href="./contact.php">問い合わせ</a>
                </div>
            </ul>
        </nav>

    </header>