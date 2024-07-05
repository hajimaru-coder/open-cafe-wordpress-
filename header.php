<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  検索にヒットさせないための記載  -->
    <meta name="robots" content="noindex" />
    <title>Open Cafe</title>

    <?php wp_head(); ?>
</head>
<body>
        <header class="p-header">
            <div class="p-header__inner">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/top/logo_light.png" alt="Open Cafe -dish & coffee-">
                </a>
                <!---- ハンバーガーアイコン ---->
                <div class="drawer-icon top-drawer">
                    <div class="drawer-icon__bars">
                        <s class="drawer-icon__bar1"></s>
                        <div class="drawer-icon__bar2"></div>
                        <div class="drawer-icon__bar3"></div>
                    </div>
                </div>
                <!---- メニューの中身 ---->
                <div class="drawer-content top-drawer">
                    <div class="drawer-content__logo"><a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/logo_light.png" alt="Open Cafe -dish & coffee-"></a></div>
                    <!-- /.drawer-content__logo -->
                    <div class="drawer-content__items">
                        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/')); ?>">
                            <span class="drawer-content-nav__link-en">TOP</span>
                            <span class="drawer-content-nav__space">/</span>
                            <span class="drawer-content-nav__link-ja">トップ</span>
                        </a></div>
                        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/concept/')); ?>">
                            <span class="drawer-content-nav__link-en">CONCEPT</span>
                            <span class="drawer-content-nav__space">/</span>
                            <span class="drawer-content-nav__link-ja">コンセプト</span>
                        </a></div>
                        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/menu/')); ?>">
                            <span class="drawer-content-nav__link-en">MENU</span>
                            <span class="drawer-content-nav__space">/</span>
                            <span class="drawer-content-nav__link-ja">メニュー</span>
                        </a></div>
                        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/news/')); ?>">
                            <span class="drawer-content-nav__link-en">NEWS</span>
                            <span class="drawer-content-nav__space">/</span>
                            <span class="drawer-content-nav__link-ja">お知らせ</span>
                        </a></div>
                        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/shop/')); ?>">
                            <span class="drawer-content-nav__link-en">SHOP</span>
                            <span class="drawer-content-nav__space">/</span>
                            <span class="drawer-content-nav__link-ja">店舗情報</span>
                        </a></div>
                        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/products/')); ?>">
                            <span class="drawer-content-nav__link-en">GIFT</span>
                            <span class="drawer-content-nav__space">/</span>
                            <span class="drawer-content-nav__link-ja">ギフト・贈り物</span>
                        </a></div>
                        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">
                            <span class="drawer-content-nav__link-en">CONTACT</span>
                            <span class="drawer-content-nav__space">/</span>
                            <span class="drawer-content-nav__link-ja">お問い合わせ</span>
                        </a></div>
                    </div>
                    <!-- /.drawer-content__items -->
                    <div class="p-sns-icons">
                        <ul class="p-sns-icons__list">
                            <li class="p-sns-icons__item p-sns-icons__item-drawer">
                                <a href="#" class="p-sns-icons__link p-sns-icons__link--twitter">
                                    <img class="p-sns-icon p-sns-icon-drawer" src="<?php echo get_template_directory_uri() ?>/img/pc/top/icon_twitter-light.png" alt="twitterアイコン">
                                </a>
                            </li>
                            <li class="p-sns-icons__item p-sns-icons__item-drawer">
                                <a href="#" class="p-sns-icons__link p-sns-icons__link--instagram">
                                    <img class="p-sns-icon p-sns-icon-drawer" src="<?php echo get_template_directory_uri() ?>/img/pc/top/icon_instagram-light.png" alt="instagramアイコン">
                                </a>
                            </li>
                            <li class="p-sns-icons__item p-sns-icons__item-drawer">
                                <a href="#" class="p-sns-icons__link p-sns-icons__link--youtube">
                                    <img class="p-sns-icon p-sns-icon-drawer" src="<?php echo get_template_directory_uri() ?>/img/pc/top/icon_youtube-light.png" alt="youtubeアイコン">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.p-sns-icons -->
                </div>
                <!-- /.drawer-content -->
                <!---- メニューの背景 ---->
                <div class="drawer-background"></div>
                <div class="drawer-background-cover"></div>
            </div>
            <!-- /.drawer -->
        </header>
        <!-- /.p-header -->