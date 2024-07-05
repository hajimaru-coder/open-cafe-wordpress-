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

        <div class="l-news-page">
            <div class="p-news-page">
                <div class="p-news-page__container">
                    <?php if (have_posts()) : ?>
                        <?php while(have_posts()) : ?>
                            <?php the_post(); ?>
                            <div class="p-news-page__thumbnail">
                                <?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/page-name/single.png" alt="記事のサムネイル">
                                <?php endif; ?>
                            </div>
                            <h1 class="p-news-page__title"><?php the_title(); ?>
                            </h1>
                            <div class="p-news-page__content">
                                <span class="p-news-page__content-date"><time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time></span>
                                <?php
                                    $category = get_the_category();
                                    if($category[0]) :?>
                                    <span class="p-news-page__content-text"><?php echo $category[0]->cat_name; ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="p-news-page__body">
                                <?php the_content(); ?>
                            </div>
                            <!-- /.p-news-page__body -->

                            <!-- pagination -->
                            <div class="pager">
                                <ul class="pager__list">
                                    <?php if (get_previous_post()): ?>
                                        <li class="pager__item pager__item-right">
                                            <?php previous_post_link('%link', '前の記事'); ?>
                                        </li>
                                    <?php else: ?>
                                        <li class="pager__item">
                                            <?php previous_post_link('%link', '前の記事'); ?>
                                        </li>
                                    <?php endif; ?>
                                        <li class="pager__item pager__item-box">
                                            <a href="<?php echo esc_url(home_url('/category/news/')); ?>">記事一覧</a>
                                        </li>
                                        <?php if (get_next_post()): ?>
                                            <li class="pager__item pager__item-left">
                                            <?php next_post_link('%link', '次の記事'); ?>
                                        </li>
                                    <?php else: ?>
                                        <li class="pager__item">
                                            <?php next_post_link('%link', '次の記事'); ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- /.p-news-page__pagination -->
                            <div class="p-news-page-article">
                                <h2 class="p-news-page-article__head">
                                    <span class="p-news-page-article__title">関連記事</span>
                                </h2>
                                <div class="p-news-page-article__body">


                                <?php if(has_category()) {
                                    $cats = get_the_category();
                                    $cat_ids = array();
                                    foreach($cats as $cat){
                                        $cat_ids[] = $cat->term_id;
                                    }
                                }

                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => '6',
                                    'post__not_in' => array($post->ID),
                                    'category__in' => $cat_ids,
                                    'orderby' => 'rand'
                                );

                                $the_query = new WP_Query($args);
                                if($the_query->have_posts()):
                                while($the_query->have_posts()): $the_query->the_post();
                                ?>

                                <div class="p-news-page-article__block">
                                        <article class="p-news-page-card"><a href="<?php the_permalink(); ?>" class="p-news-page-card__link">
                                            <div class="p-news-page-card__img">
                                                <div class="p-news-page-card__thumbnail">
                                                    <?php if(has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail(); ?>
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri() ?>/img/pc/news/img_news1.png" alt="記事のサムネイル">
                                                    <?php endif; ?>
                                                </div>
                                                <?php
                                                $category = get_the_category();
                                                if($category[0]) :?>
                                                    <div class="c-tag-small p-news-page-card__tag"><?php echo $category[0]->cat_name; ?></div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-news-page-card__body">
                                                <p class="p-news-page-card__text"><?php echo wp_trim_words( get_the_title(), 25, '…' ); ?></p>
                                                <time class="p-news-page-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                                            </div>
                                        </a></article>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <!-- /.p-news-page-article -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- /.p-news-page__container -->
            </div>
            <!-- /.p-news-page -->
        </div>
        <!-- /.l-news-page -->

        <?php get_footer(); ?>