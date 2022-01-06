<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="static template">
    <meta name="keywords" content="keywords_01,keywords_02">
    <meta name="format-detection" content="telephone=no">
    <title><?= isset($pageTitle) ? $pageTitle : 'page-title'; ?></title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- end font -->
    <!-- style -->
    <link rel="stylesheet" href="<?= resource('css', 'style.css') ?>" />
    <link rel="stylesheet" href="<?= resource('css', 'page/global.css') ?>" />
    <?= resources('css', isset($headCSS) ? $headCSS : '', true) ?>
    <!-- end style -->
</head>

<body class="page">
<button class="c-button c-button--navigation" id="button_burger"></button>
    <header class="page__top l-sidebar">
        <!-- header start here -->
  
        <nav>
            <ul class="topNavigation__list">
                <?php
                $links = [
                    ['HOME', 'ホーム'],
                    ['NEWS', '新着情報'],
                    ['WORKS', '施工事例'],
                    ['CAMPANY    ', '会社紹介'],
                    ['BUSINESS    ', '業務内容'],
                    ['ADVANTAGE    ', '当社の強み'],
                    ['ACCESS    ', 'アクセス'],
                    ['RECRUIT    ', '採用情報'],
                    ['CONTACT    ', 'お問い合わせ'],
                ];
                foreach ($links as $key => $val) :
                ?>
                    <li class="topNavigation__list__item">
                        <a href="#">
                            <span class="en"><?= trim($val[0]) ?></span>
                            <span class="jp"><?= trim($val[1]) ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <!-- header end -->
    </header>
    <main class="page__center">
    

            
        <!-- content start here -->