<?php get_header(); ?>

<main>
        <div class="l-first-view">
            <div class="p-first-view">
                <picture class="p-first-view__fv">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/sp/contact/img_firstview_contact_sp.png">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pc/contact/img_firstview_contact.png" alt="ファーストビューニュース">
                </picture>
                <h1 class="p-first-view__head">
                    <span class="p-first-view__head-inline-en">CONTACT</span>
                    <span class="p-first-view__head-inline-ja">お問い合わせ</span>
                </h1>
            </div>
            <!-- /.p-first-view -->
        </div>
        <!-- /.l-first-view -->

        <?php get_template_part('breadcrumb'); ?>

        <div class="l-contact">
            <div class="p-contact">
                <h2 class="p-contact__head">
                    <span class="p-contact__head-main">お問い合わせフォーム</span>
                    <span class="p-contact__head-sub">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</span>
                </h2>

                <?php echo do_shortcode( '[contact-form-7 id="c6cabbd" title="お問い合わせ"]' ); ?>

            </div>
            <!-- /.p-contact -->
        </div>
        <!-- /.l-contact -->

<?php get_footer(); ?>