<?php get_header(); ?>

<main>
        <div class="l-first-view">
            <div class="p-first-view">
                <picture class="p-first-view__fv">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/menu/img_firstview_menu_sp.png">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/menu/img_firstview_menu.png" alt="ファーストビューパスタ">
                </picture>
                <h1 class="p-first-view__head">
                    <span class="p-first-view__head-inline-en">MENU</span>
                    <span class="p-first-view__head-inline-ja">メニュー</span>
                </h1>
            </div>
            <!-- /.p-first-view -->F
        </div>
        <!-- /.l-first-view -->

        <?php get_template_part('breadcrumb'); ?>

        <div class="l-menus">
            <div class="l-menu-tab-list">
                <ul class="p-menu-tab-list">
                    <li class="p-menu-tab-list__item">
                        <a class="p-menu-tab-list__link" href="<?php echo esc_url(get_term_link('pasta', 'genre')); ?>">
                            <span class="p-menu-tab-list__link-text">パスタ</span>
                        </a>
                    </li>
                    <li class="p-menu-tab-list__item">
                        <a class="p-menu-tab-list__link" href="<?php echo esc_url(get_term_link('salad', 'genre')); ?>">
                            <span class="p-menu-tab-list__link-text">サラダ</span>
                        </a>
                    </li>
                    <li class="p-menu-tab-list__item">
                        <a class="p-menu-tab-list__link" href="<?php echo esc_url(get_term_link('breadsweets', 'genre')); ?>">
                            <span class="p-menu-tab-list__link-text">パン&<br>スイーツ</span>
                        </a>
                    </li>
                    <li class="p-menu-tab-list__item">
                        <a class="p-menu-tab-list__link" href="<?php echo esc_url(get_term_link('drink', 'genre')); ?>">
                            <span class="p-menu-tab-list__link-text">ドリンク</span>
                        </a>
                    </li>
                </ul>
                <!-- /.p-menu-tab-list -->
            </div>
            <!-- /.l-menu-tab-list -->
        </div>
        <!-- /.l-menus -->
        <div class="l-menu-container">
            <div class="l-menu-list">
                <ul class="p-menu-list">

                <?php
                    $menu_args = array(
                        'post_type' => 'menu', //カスタム投稿タイプ名
                        'posts_per_page' => -1, //すべて取得
                        'order' => 'ASC', //昇順に表示
                    );

                    $my_query = new WP_Query( $menu_args );
                ?>

                    <?php if ($my_query->have_posts()) : ?>
                        <?php while($my_query->have_posts()) : ?>
                            <?php $my_query->the_post(); ?>
                            <li class="p-menu-list__item p-menu-item">
                                <div class="p-menu-item__img">
                                <?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/news/img_news1.png" alt="記事のサムネイル">
                                <?php endif; ?>
                                <div class="p-menu-item__body">
                                    <p class="p-menu-item__name"><?php the_title(); ?></p>
                                    <p class="p-menu-item__price"><?php the_field('price'); ?></p>
                                </div>
                            </li>
                        <?php endwhile ?>
                    <?php endif; ?>
                </ul>
                <!-- /.p-menu-list -->
            </div>
            <!-- /.l-menu-list -->
        </div>
        <!-- /.l-menu-container -->

<?php get_footer(); ?>