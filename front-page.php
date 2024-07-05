<?php get_header(); ?>

        <main>
            <div id="is-scrollTop" class="l-main-visual">
                <div class="p-main-menu">
                    <h1 class="p-main-menu__logo">
                        <a href="index.html">
                            <img src="<?php echo get_template_directory_uri() ?>/img/pc/top/logo_dark.png" alt="Open Cafe -dish & coffee-">
                        </a>
                    </h1>
                    <div class="p-main-menu__menu-wrapper">
                        <div class="p-main-menu__menus">
                            <nav class="p-main-menu-nav">
                                <ul class="p-main-menu-nav__list">
                                    <li class="p-main-menu-nav__item">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-main-menu-nav__link">
                                            <span class="p-main-menu-nav__link-en">TOP</span>
                                            <span class="p-main-menu-nav__link-ja">トップ</span>
                                        </a>
                                    </li>
                                    <li class="p-main-menu-nav__item">
                                        <a href="<?php echo esc_url(home_url('/concept/')); ?>" class="p-main-menu-nav__link">
                                            <span class="p-main-menu-nav__link-en">CONCEPT</span>
                                            <span class="p-main-menu-nav__link-ja">コンセプト</span>
                                        </a>
                                    </li>
                                    <li class="p-main-menu-nav__item">
                                        <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="p-main-menu-nav__link">
                                            <span class="p-main-menu-nav__link-en">MENU</span>
                                            <span class="p-main-menu-nav__link-ja">メニュー</span>
                                        </a>
                                    </li>
                                    <li class="p-main-menu-nav__item">
                                        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="p-main-menu-nav__link">
                                            <span class="p-main-menu-nav__link-en">NEWS</span>
                                            <span class="p-main-menu-nav__link-ja">お知らせ</span>
                                        </a>
                                    </li>
                                    <li class="p-main-menu-nav__item">
                                        <a href="<?php echo esc_url(home_url('/shop/')); ?>" class="p-main-menu-nav__link">
                                            <span class="p-main-menu-nav__link-en">SHOP</span>
                                            <span class="p-main-menu-nav__link-ja">店舗情報</span>
                                        </a>
                                    </li>
                                    <li class="p-main-menu-nav__item">
                                        <a href="<?php echo esc_url(home_url('/products/')); ?>" class="p-main-menu-nav__link">
                                            <span class="p-main-menu-nav__link-en">GIFT</span>
                                            <span class="p-main-menu-nav__link-ja">ギフト・贈り物</span>
                                        </a>
                                    </li>
                                    <li class="p-main-menu-nav__item">
                                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="p-main-menu-nav__link">
                                            <span class="p-main-menu-nav__link-en">CONTACT</span>
                                            <span class="p-main-menu-nav__link-ja">お問い合わせ</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /.p-nav-menu -->
                            <div class="p-sns-icons">
                                <ul class="p-sns-icons__list">
                                    <li class="p-sns-icons__item">
                                        <a href="#" class="p-sns-icons__link p-sns-icons__link--twitter">
                                            <img class="p-sns-icon" src="<?php echo get_template_directory_uri() ?>/img/pc/top/icon_twitter-dark.png" alt="twitterアイコン">
                                        </a>
                                    </li>
                                    <li class="p-sns-icons__item">
                                        <a href="#" class="p-sns-icons__link p-sns-icons__link--instagram">
                                            <img class="p-sns-icon" src="<?php echo get_template_directory_uri() ?>/img/pc/top/icon_instagram-dark.png" alt="instagramアイコン">
                                        </a>
                                    </li>
                                    <li class="p-sns-icons__item">
                                        <a href="#" class="p-sns-icons__link p-sns-icons__link--youtube">
                                            <img class="p-sns-icon" src="<?php echo get_template_directory_uri() ?>/img/pc/top/icon_youtube-dark.png" alt="youtubeアイコン">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.p-sns-icons dark -->
                        </div>
                    </div>
                    <!-- /.p-main-menu__menu-wrapper -->
                </div>
                <!-- /.p-main-menu -->
                <div class="p-main-visual">
                    <!-- Slides -->
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-img">
                                    <picture class="p-main-visual__fv">
                                        <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/top/img_mainvisual1_sp.png">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_mainvisual1.png" alt="パンとコーヒー">
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-img">
                                    <picture class="p-main-visual__fv">
                                        <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/top/img_mainvisual2_sp.png">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_mainvisual2.png" alt="カウンターテーブル">
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-img">
                                    <picture class="p-main-visual__fv">
                                        <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/top/img_mainvisual3_sp.png">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_mainvisual3.png" alt="カフェで読書をする女性">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- /.swiper -->
                    <div class="p-main-visual__text">
                        <p class="p-main-visual__text-body">
                            パスタとコーヒーがとってもおいしい、
                            <br>
                            ほっと落ち着くのんびり空間。
                        </p>
                        <p class="p-main-visual__text-body-sp">
                            パスタとコーヒーが
                            <br>
                            とってもおいしい、
                            <br>
                            ほっと落ち着くのんびり空間。
                        </p>

                    </div>
                    <!-- /.p-main-visual__text -->

                    <div class="l-pickup-news">
                        <div class="p-pickup-news">
                        <?php $pickup_query = new WP_Query(
                            array(
                            'post_type'      => 'post', // 投稿タイプ
                            'tag'            => 'pickup', // pickupタグがついたもの
                            'posts_per_page' => 1 // 1件取得
                            )
                        );
                        ?>

                        <?php if ($pickup_query->have_posts()) : ?>
                            <?php while($pickup_query->have_posts()) : ?>
                            <?php $pickup_query->the_post(); ?>

                        <?php
                        $category = get_the_category();
                        if($category[0]) :?>
                            <p class="p-pickup-news__tag"><span class="c-tag-small p-tag"><?php echo $category[0]->cat_name; ?></span></p>
                        <?php endif; ?>
                        </div>
                        <!-- /.p-pickup-news -->
                        <article class="p-category-card">
                            <a href="<?php the_permalink(); ?>" class="p-category-card__link">
                                <div class="p-category-card__thumbnail"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_news1.png" alt="ピックアップ記事"></div>
                                <div class="p-category-card__contents">
                                    <p class="p-category-card__date"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time></p>
                                    <p class="p-category-card__text"><?php echo wp_trim_words( get_the_title(), 30, '…' ); ?></p>
                                </div>
                            </a>
                        </article>
                        <!-- /.p-category-card -->
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </div>
                    <!-- /.l-pickup-news -->
                </div>
                <!-- /.p-main-visual -->
            </div>
            <!-- /.l-main-visual -->
            <div class="l-top-content">
                <section class="p-top-content">
                    <div class="p-top-content__container">
                        <div class="p-top-content__concept">
                            <h2 class="p-top-content__head">
                                <span class="c-section-title__inline-en p-top-content__head-en">CONCEPT</span>
                                <span class="c-section-title__inline-ja p-top-content__head-ja">当店のこだわり</span>
                            </h2>
                            <div class="p-top-content__body">
                                <div class="p-top-content__sub-head">最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ</div>
                                <p class="p-top-content__text">ダミー_国内外から賞賛を<br>受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br><br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                            </div>
                            <div class="p-top-content__button">
                                <a href="<?php echo esc_url(home_url('/concept/')); ?>" class="c-btn c-btn__main">
                                    <span class="c-btn__text">詳しくはこちら</span>
                                </a>
                            </div>
                        </div>
                        <div class="p-top-content__img"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_concept.png" alt="３杯のコーヒー"></div>
                    </div>
                </section>
                <!-- /.p-top-content -->
            </div>
            <!-- /.l-top-content -->
            <div class="l-top-lunch">
                <section class="p-special-lunch">
                    <div class="p-special-lunch__container">
                        <h2 class="p-special-lunch__head">
                            <span class="c-section-title__inline-en p-special-lunch__head-en">SPECIAL LUNCH SET</span>
                            <span class="c-section-title__inline-ja p-special-lunch__head-ja">今月のスペシャルランチセット</span>
                        </h2>
                        <div class="p-special-lunch__body">
                            <div class="p-lunch-block">
                                <div class="p-lunch-block__ballon"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_balloon-special-lunch-set.png" alt="パスタ、サラダ、ドリンクのお得なセット☆"></div>
                                <div class="p-lunch-block__head">
                                    <picture class="p-lunch-block__fv">
                                        <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/top/img_ribbon-text_sp.png">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_ribbon-text.png" alt="お好きなパスタをお選びください">
                                    </picture>
                                </div>
                                <div class="p-lunch-block__body">
                                    <ul class="p-lunch-block__list">
                                        <li class="p-lunch-block__item">
                                            <div class="p-card">
                                                <div class="p-card__img">
                                                    <img src="<?php the_field('lunch_img-a'); ?>">
                                                </div>
                                                <div class="p-card__body">
                                                    <p class="p-card__alphabet">A</p>
                                                    <p class="p-card__menu-name"><?php the_field('lunch_name-a'); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-lunch-block__item">
                                            <div class="p-card">
                                                <div class="p-card__img">
                                                    <img src="<?php the_field('lunch_img-b'); ?>">
                                                </div>
                                                <div class="p-card__body">
                                                    <p class="p-card__alphabet">B</p>
                                                    <p class="p-card__menu-name"><?php the_field('lunch_name-b'); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-lunch-block__item">
                                            <div class="p-card">
                                                <div class="p-card__img">
                                                    <img src="<?php the_field('lunch_img-c'); ?>">
                                                </div>
                                                <div class="p-card__body">
                                                    <p class="p-card__alphabet">C</p>
                                                    <p class="p-card__menu-name"><?php the_field('lunch_name-c'); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-lunch-block__item">
                                            <div class="p-card">
                                                <div class="p-card__img">
                                                    <img src="<?php the_field('lunch_img-d'); ?>">
                                                </div>
                                                <div class="p-card__body">
                                                    <p class="p-card__alphabet">D</p>
                                                    <p class="p-card__menu-name"><?php the_field('lunch_name-d'); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-lunch-block__bottom p-lunch-detail">
                                    <div class="p-lunch-detail__img"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_lunch-detail.png" alt="スペシャルランチセット"></div>
                                    <div class="p-lunch-detail__description">
                                        <p class="p-lunch-detail__name">スペシャルランチセット<br>【選べる3品】</p>
                                        <p class="p-lunch-detail__price">1,280 yen</p>
                                        <p class="p-lunch-detail__time">(11:00 AM〜14:00 PMまで)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.p-special-lunch -->
            </div>
            <!-- /.l-top-lunch -->
            <div class="l-top-grand-menu">
                <section class="p-top-grand-menu">
                    <div class="p-top-grand-menu__container">
                        <h2 class="p-top-grand-menu__head">
                            <span class="c-section-title__inline-en p-top-grand-menu__head-en">GRAND MENU</span>
                            <span class="c-section-title__inline-ja p-top-grand-menu__head-ja">グランドメニュー</span>
                        </h2>
                        <div class="p-top-grand-menu__body">
                            <section class="p-menu-block">
                                <h3 class="p-menu-block__head">パスタ</h3>
                                <div class="p-menu-block__body">
                                    <ul class="p-menu-block__list">
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-pasta_img-1'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-pasta_name-1'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-pasta_price-1'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-pasta_img-2'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-pasta_name-2'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-pasta_price-2'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-pasta_img-3'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-pasta_name-3'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-pasta_price-3'); ?></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <section class="p-menu-block">
                                <h3 class="p-menu-block__head">サラダ</h3>
                                <div class="p-menu-block__body">
                                    <ul class="p-menu-block__list">
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-salad_img-1'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-salad_name-1'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-salad_price-1'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                        <div class="p-menu-card__img"><img src="<?php the_field('g-salad_img-2'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-salad_name-2'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-salad_price-2'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                        <div class="p-menu-card__img"><img src="<?php the_field('g-salad_img-3'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-salad_name-3'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-salad_price-3'); ?></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <section class="p-menu-block">
                                <h3 class="p-menu-block__head">パン & スイーツ</h3>
                                <div class="p-menu-block__body">
                                    <ul class="p-menu-block__list">
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-breadsweets_img-1'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-breadsweets_name-1'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-breadsweets_price-1'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-breadsweets_img-2'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-breadsweets_name-2'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-breadsweets_price-2'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-breadsweets_img-3'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-breadsweets_name-3'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-breadsweets_price-3'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-breadsweets_img-4'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-breadsweets_name-4'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-breadsweets_price-4'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-breadsweets_img-5'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-breadsweets_name-5'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-breadsweets_price-5'); ?></div>
                                            </div>
                                        </li>
                                        <li class="p-menu-block__item p-menu-card">
                                            <div class="p-menu-card__img"><img src="<?php the_field('g-breadsweets_img-6'); ?>"></div>
                                            <div class="p-menu-card__body">
                                                <p class="p-menu-card__name"><?php the_field('g-breadsweets_name-6'); ?></p>
                                                <div class="p-menu-card__price"><?php the_field('g-breadsweets_price-6'); ?></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <section class="p-menu-block">
                                <h3 class="p-menu-block__head">ドリンク</h3>
                                <div class="p-menu-block__body p-menu-block__body-drink">
                                    <div class="p-drink-menus">
                                        <div class="p-drink-menus__img"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_drink1.png" alt="ドリンク画像"></div>
                                        <div class="p-drink-menus__body">
                                            <ul class="p-drink-menus__list">
                                                <li class="p-drink-menus__item">
                                                    <h4 class="p-drink-menus__cat">コーヒー</h4>
                                                    <ul class="p-drink-menus__sub-list">
                                                        <li class="p-drink-menus__sub-item">
                                                            <p class="p-drink-menus__name"><?php the_field('g-drink_coffee__name-1'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_coffee__price-1'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                        <p class="p-drink-menus__name"><?php the_field('g-drink_coffee__name-2'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_coffee__price-2'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                        <p class="p-drink-menus__name"><?php the_field('g-drink_coffee__name-3'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_coffee__price-3'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                        <p class="p-drink-menus__name"><?php the_field('g-drink_coffee__name-4'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_coffee__price-4'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                        <p class="p-drink-menus__name"><?php the_field('g-drink_coffee__name-5'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_coffee__price-5'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                        <p class="p-drink-menus__name"><?php the_field('g-drink_coffee__name-6'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_coffee__price-6'); ?></p>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="p-drink-menus__list">
                                                <li class="p-drink-menus__item">
                                                    <h4 class="p-drink-menus__cat">紅茶</h4>
                                                    <ul class="p-drink-menus__sub-list">
                                                        <li class="p-drink-menus__sub-item">
                                                            <p class="p-drink-menus__name"><?php the_field('g-drink_tea__name-1'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_tea__price-1'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                        <p class="p-drink-menus__name"><?php the_field('g-drink_tea__name-2'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_tea__price-2'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                        <p class="p-drink-menus__name"><?php the_field('g-drink_tea__name-3'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_tea__price-3'); ?></p>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="p-drink-menus__list">
                                                <li class="p-drink-menus__item">
                                                    <h4 class="p-drink-menus__cat">ソフトドリンク</h4>
                                                    <ul class="p-drink-menus__sub-list">
                                                        <li class="p-drink-menus__sub-item">
                                                            <p class="p-drink-menus__name"><?php the_field('g-drink_soft__name-1'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_soft__price-1'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                            <p class="p-drink-menus__name"><?php the_field('g-drink_soft__name-2'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_soft__price-2'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                            <p class="p-drink-menus__name"><?php the_field('g-drink_soft__name-3'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_soft__price-3'); ?></p>
                                                        </li>
                                                        <li class="p-drink-menus__sub-item">
                                                            <p class="p-drink-menus__name"><?php the_field('g-drink_soft__name-4'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_soft__price-4'); ?></p>
                                                        </li>
                                                    <li class="p-drink-menus__sub-item">
                                                            <p class="p-drink-menus__name"><?php the_field('g-drink_soft__name-5'); ?></p>
                                                            <p class="p-drink-menus__price"><?php the_field('g-drink_soft__price-5'); ?></p>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="p-top-grand-menu__button">
                    <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="c-btn c-btn__main">
                        <span class="c-btn__text">その他のメニュー</span>
                    </a>
                </div>
            </section>
            <!-- /.p-top-grand-menu -->
        </div>
        <!-- /.l-top-grand-menu -->
        <div class="l-top-gallery">
            <section class="p-top-gallery">
                <div class="p-top-gallery__container">
                    <div class="p-top-gallery__ballon"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_balloon-gallery.png" alt="インスタグラムも毎日投稿しています"></div>
                    <h2 class="p-top-gallery__head">
                        <span class="c-section-title__inline-en p-top-gallery__head-en">GALLERY</span>
                        <span class="c-section-title__inline-ja p-top-gallery__head-ja">ギャラリー</span>
                    </h2>
                    <div class="p-top-gallery__body">
                        <ul class="p-top-gallery__list">
                            <li class="p-top-gallery__item p-gallery-card">
                                <div class="p-gallery-card__img"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_gallery1.png" alt="ギャラリー画像１"></div>
                            </li>
                            <li class="p-top-gallery__item p-gallery-card">
                                <div class="p-gallery-card__img"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_gallery2.png" alt="ギャラリー画像２"></div>
                            </li>
                            <li class="p-top-gallery__item p-gallery-card">
                                <div class="p-gallery-card__img"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_gallery3.png" alt="ギャラリー画像３"></div>
                            </li>
                            <li class="p-top-gallery__item p-gallery-card">
                                <div class="p-gallery-card__img"><img src="<?php echo get_template_directory_uri() ?>/img/pc/top/img_gallery4.png" alt="ギャラリー画像４"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-top-gallery__button">
                    <a href="#" class="c-btn c-btn__main">
                        <span class="c-btn__text">インスタグラムを見る</span>
                    </a>
                </div>
            </section>
            <!-- /.p-top-gallery -->
        </div>
        <!-- /.l-top-gallery -->
        <div class="l-top-news">
            <section class="p-top-news">
                <div class="p-top-news__container">
                    <h2 class="p-top-news__head">
                        <span class="c-section-title__inline-en p-top-news__head-en">NEWS</span>
                        <span class="c-section-title__inline-ja p-top-news__head-ja">お知らせ</span>
                    </h2>
                    <div class="p-top-news__body">
                        <div class="p-top-news-block">
                            <div class="p-top-news-block__main-article">

                            <?php
                                // メインの記事のクエリ
                                $args_main = array(
                                    'post_type' => 'post', //カスタム投稿タイプ名
                                    'posts_per_page' => 1, //取得する投稿の件数
                                    'order' => 'DESC', //新しい順に表示
                                );

                                $my_query_main = new WP_Query( $args_main );
                            ?>

                            <?php while ( $my_query_main->have_posts() ) : $my_query_main->the_post(); ?>

                                <article class="p-top-news-card p-top-news-card__large"><a href="<?php the_permalink(); ?>">
                                    <div class="p-top-news-card__img">
                                        <div class="p-top-news-card__thumbnail">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                                    <?php
                                    $category = get_the_category();
                                    if($category[0]) :?>
                                        <div class="c-tag p-top-news-card__tag"><?php echo $category[0]->cat_name; ?></div>
                                    <?php endif; ?>
                                    <div class="p-top-news-card__body">
                                        <h3 class="p-top-news-card__title"><?php echo wp_trim_words( get_the_title(), 60, '…' ); ?></h3>
                                        <p class="p-top-news-card__text"><?php echo wp_trim_words( get_the_content(), 100, '…' ); ?></p>
                                        <p class="p-top-news-card__date"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time></p>
                                    </div>
                                </a></article>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                            </div>

                            <div class="p-top-news-block__sub-article">
                                <div class="p-top-news-block__items">

                                <?php
                                // サブの記事のクエリ
                                $args_sub = array(
                                    'post_type' => 'post', //カスタム投稿タイプ名
                                    'posts_per_page' => 4, //取得する投稿の件数
                                    'order' => 'DESC', //新しい順に表示
                                    'post__not_in' => array( $my_query_main->posts[0]->ID ), // メインの記事のIDを除外する
                                );

                                    $my_query_sub = new WP_Query( $args_sub );
                                ?>

                                <?php while ( $my_query_sub->have_posts() ) : $my_query_sub->the_post(); ?>

                                    <div class="p-top-news-card__item">
                                        <article class="p-top-news-card p-top-news-card__small"><a href="<?php the_permalink(); ?>">
                                            <div class="p-top-news-card__img">
                                                <div class="p-top-news-card__thumbnail">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                            </div>
                                            <?php
                                            $category = get_the_category();
                                            if($category[0]) :?>
                                            <div class="c-tag-small p-top-news-card__tag-small"><?php echo $category[0]->cat_name; ?></div>
                                            <?php endif; ?>
                                            <div class="p-top-news-card__body">
                                                <p class="p-top-news-card__text"><?php echo wp_trim_words( get_the_title(), 40, '…' ); ?></p>
                                                <p class="p-top-news-card__date-small"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time></p>
                                            </div>
                                        </a></article>
                                    </div>


                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-top-news__button">
                        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-btn c-btn__main">
                            <span class="c-btn__text">過去のお知らせ</span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- /.p-top-news -->
        </div>
        <!-- /.l-top-news -->

<?php get_footer(); ?>