<?php get_header(); ?>

<main>
        <div class="l-first-view">
            <div class="p-first-view">
                <picture class="p-first-view__fv">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/shop/img_firstview_shop_sp.png">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/shop/img_firstview_shop.png" alt="ファーストビューニュース">
                </picture>
                <h1 class="p-first-view__head">
                    <span class="p-first-view__head-inline-en">SHOP</span>
                    <span class="p-first-view__head-inline-ja">店舗一覧</span>
                </h1>
            </div>
            <!-- /.p-first-view -->
        </div>
        <!-- /.l-first-view -->

        <?php get_template_part('breadcrumb'); ?>

        <div class="l-shop">
            <div class="p-shop">

                <?php
                    $args = array(
                        'post_type' => 'shop', //カスタム投稿タイプ名
                        'posts_per_page' => 3, //取得する投稿の件数
                        'order' => 'ASC', //昇順に表示
                    );

                    $my_query = new WP_Query( $args );
                ?>

                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

                <div class="p-shop__block">
                    <div class="p-shop__head">
                        <div class="p-shop__title"><?php the_title(); ?></div>
                    </div>
                    <div class="p-shop-access__body">
                        <div class="p-shop-access__map">
                            <div class="p-shop-access__iframe-wrap">
                                <iframe src="<?php the_field('map'); ?>">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="p-shop-access__info">
                        <dl class="p-shop-access__list">
                            <div class="p-shop-access__item">
                                <dt class="p-shop-access__item-title">住所</dt>
                                <dd class="p-shop-access__item-content"><?php the_field('address'); ?></dd>
                            </div>
                            <div class="p-shop-access__item">
                                <dt class="p-shop-access__item-title">TEL</dt>
                                <dd class="p-shop-access__item-content"><?php the_field('tel'); ?></dd>
                            </div>
                            <div class="p-shop-access__item">
                                <dt class="p-shop-access__item-title">Mail</dt>
                                <dd class="p-shop-access__item-content"><?php the_field('mail'); ?></dd>
                            </div>
                        </dl>
                        <dl class="p-shop-access__list">
                            <div class="p-shop-access__item">
                                <dt class="p-shop-access__item-title">営業時間</dt>
                                <dd class="p-shop-access__item-content"><?php the_field('business_hours'); ?></dd>
                            </div>
                            <div class="p-shop-access__item">
                                <dt class="p-shop-access__item-title">定休日</dt>
                                <dd class="p-shop-access__item-content"><?php the_field('regular_holiday'); ?></dd>
                            </div>
                            <div class="p-shop-access__item">
                                <dt class="p-shop-access__item-title">座席</dt>
                                <dd class="p-shop-access__item-content"><?php the_field('seat'); ?></dd>
                            </div>
                        </dl>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            </div>
            <!-- /.p-shop -->
        </div>
        <!-- /.l-shop -->

<?php get_footer(); ?>