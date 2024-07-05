<?php get_header(); ?>

<main>
        <div class="l-first-view">
            <div class="p-first-view">
                <picture class="p-first-view__fv">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/news/img_firstview_news_sp.png">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/news/img_firstview_news.png" alt="ファーストビューニュース">
                </picture>
                <h1 class="p-first-view__head">
                    <span class="p-first-view__head-inline-en">NEWS</span>
                    <span class="p-first-view__head-inline-ja">お知らせ</span>
                </h1>
            </div>
            <!-- /.p-first-view -->
        </div>
        <!-- /.l-first-view -->

        <?php get_template_part('breadcrumb'); ?>

        <div class="l-news">
            <div class="p-news">
                <div class="p-news-main">
                <?php if (is_category()) : ?>
                    <h2 class="p-news-main__head">
                        <span class="p-news-main__title"><?php the_archive_title(); ?></span>
                    </h2>
                <?php endif; ?>
                    <div class="p-news-main__body">
                        <?php if (have_posts()) : ?>
                            <?php while(have_posts()) : ?>
                                <?php the_post(); ?>
                                <div class="p-news-main__block">
                                    <article class="p-news-main-card p-news-main-card__large"><a href="<?php the_permalink(); ?>" class="p-news-main-card__link">
                                        <div class="p-news-main-card__img">
                                            <div class="p-news-main-card__thumbnail">
                                                <?php if(has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/news/img_news1.png" alt="記事のサムネイル">
                                                <?php endif; ?>
                                            </div>
                                            <?php
                                            $category = get_the_category();
                                            if($category[0]) :?>
                                                <div class="c-tag p-news-card-tag"><?php echo $category[0]->cat_name; ?></div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="p-news-main-card__body">
                                            <p class="p-news-main-card__text"><?php echo wp_trim_words( get_the_title(), 40, '…' ); ?></p>
                                            <time class="p-news-main-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                                        </div>
                                    </a></article>
                                </div>
                            <?php endwhile ?>
                        <?php endif; ?>
                    </div>
                    <div class="l-news-pagination">
                        <div class="p-news-pagination">
                            <ul class="p-news-pagination__list">
                            <?php if (paginate_links()) : ?>
                                    <!-- pagination -->
                                    <?php echo paginate_links(
                                        array(
                                            'end_size' => 1,
                                            'mid_size' => 1,
                                            'prev_next' => true,
                                            'prev_text' => '',
                                            'next_text' => '',
                                        )
                                    ); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!-- /.p-news-pagination -->
                    </div>
                    <!-- /.l-news-pagination -->
                </div>
                <!-- /.p-news-main -->

                <div class="p-news-side">
                    <div class="p-news-side__block">
                        <div class="p-news-side__head">
                            <h3 class="p-news-side__title">最近の記事</h3>
                        </div>
                        <ul class="p-news-side__list">

                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => '5',
                                'order' => 'ASC'
                            );

                            $the_query = new WP_Query($args);
                                if($the_query->have_posts()):
                                while($the_query->have_posts()): $the_query->the_post();
                        ?>
                                <li class="p-news-side__item">
                                    <article class="p-news-side-card p-news-side-card__small"><a href="<?php the_permalink(); ?>" class="p-news-side-card__link">
                                        <div class="p-news-side-card__thumbnail">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/pc/news/img_news1.png" alt="記事のサムネイル" class="p-news-side-card__img">
                                        </div>
                                        <div class="p-news-side-card__body">
                                            <p class="p-news-side-card__text"><?php echo wp_trim_words( get_the_title(), 25, '…' ); ?></p>
                                            <time class="p-news-side-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                                        </div>
                                    </a></article>
                                </li>
                            <?php endwhile ?>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <!-- /.p-news-side__block -->

                    <div class="p-news-side__block">
                        <div class="p-news-side__head">
                            <h3 class="p-news-side__title">カテゴリ</h3>
                        </div>
                        <ul class="p-news-side__list p-news-side-category">

                            <?php
                            $cats = get_categories();
                            foreach( $cats as $cat ):
                            ?>

                            <li class="p-news-side-category__item"><a href="<?php echo get_category_link($cat->term_id); ?>" class="p-news-sub-category__link"><?php echo $cat->name; ?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <!-- /.p-news-side__block -->
                </div>
                <!-- /.p-news-side-->
            </div>
            <!-- /.p-news -->
        </div>
        <!-- /.l-news -->

<?php get_footer(); ?>