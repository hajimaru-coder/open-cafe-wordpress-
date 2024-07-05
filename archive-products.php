<?php get_header(); ?>

<main>
        <div class="l-first-view">
            <div class="p-first-view">
                <picture class="p-first-view__fv">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/gift/img_firstview_gift_sp.png">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/gift/img_firstview_gift.png" alt="ファーストビューニュース">
                </picture>
                <h1 class="p-first-view__head">
                    <span class="p-first-view__head-inline-en">GIFT</span>
                    <span class="p-first-view__head-inline-ja">ギフト・贈り物</span>
                </h1>
            </div>
            <!-- /.p-first-view -->
        </div>
        <!-- /.l-first-view -->

        <?php get_template_part('breadcrumb'); ?>

        <div class="l-gift">
            <div class="p-gift">
                <ul class="p-gift__list">
                    <li class="p-gift__block">
                        <div class="p-gift-item-main">

                            <?php
                                $args = array(
                                    'post_type' => 'products', //カスタム投稿タイプ名
                                    'posts_per_page' => 1, //取得する投稿の件数
                                    'orderby' => 'rand', //ランダムに表示
                                );

                                $my_query = new WP_Query( $args );
                            ?>

                            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                            <?php the_post_thumbnail(); ?>
                            <div class="p-gift-item__body p-gift-item__body-sp">
                                <p class="p-gift-item-main__name"><?php the_title(); ?></p>
                                <p class="p-gift-item-main__price"><?php the_field('price'); ?></p>
                                <div class="p-gift-item__wrap-button">
                                    <button class="p-gift-item__button"><a href="#" target="_blank" >ショップで確認する</a></button>
                                </div>
                            </div>

                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>
                        </div>
                        <ul class="p-gift-item-sub__list">

                            <?php
                                $args = array(
                                    'post_type' => 'products', //カスタム投稿タイプ名
                                    'posts_per_page' => 4, //取得する投稿の件数
                                    'orderby' => 'rand', //ランダムに表示
                                );

                                $my_query = new WP_Query( $args );
                            ?>

                            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                            <li class="p-gift-item">
                            <?php the_post_thumbnail(); ?>
                                <div class="p-gift-item__body">
                                    <p class="p-gift-item__name"><?php the_title(); ?></p>
                                    <p class="p-gift-item__price"><?php the_field('price'); ?></p>
                                    <div class="p-gift-item__wrap-button">
                                        <button class="p-gift-item__button"><a href="#" target="_blank" >ショップで確認する</a></button>
                                    </div>
                                </div>
                            </li>

                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>

                        </ul>
                    </li>
                    <li class="p-gift__block">
                        <ul class="p-gift__list-sub">

                        <?php
                                $args = array(
                                    'post_type' => 'products', //カスタム投稿タイプ名
                                    'posts_per_page' => 4, //取得する投稿の件数
                                    'orderby' => 'rand', //ランダムに表示
                                );

                                $my_query = new WP_Query( $args );
                            ?>

                            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                            <li class="p-gift-item">
                            <?php the_post_thumbnail(); ?>
                                <div class="p-gift-item__body">
                                    <p class="p-gift-item__name"><?php the_title(); ?></p>
                                    <p class="p-gift-item__price"><?php the_field('price'); ?></p>
                                    <div class="p-gift-item__wrap-button">
                                        <button class="p-gift-item__button"><a href="#" target="_blank" >ショップで確認する</a></button>
                                    </div>
                                </div>
                            </li>

                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>

                        </ul>
                    </li>
                </ul>
                <!-- /p-gift__list -->
                <div class="l-gift-info">
                    <div class="p-gift-info">
                        <div class="p-gift-info__block">
                            <div class="p-gift-info__contents">
                                <p class="p-gift-info__title">ラッピングは無料でお付けいたします。<br class="br-sp">お気軽にご相談ください。</p>
                                <p class="p-gift-info__text">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
                            </div>
                            <div class="p-gift-info__image">
                                <img src="<?php echo get_template_directory_uri() ?>/img/pc/gift/img_wrapping.png" alt="ラッピングのイメージ画像" class="p-gift-info__img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /p-gift -->
        </div>
        <!-- /l-gift -->

<?php get_footer(); ?>