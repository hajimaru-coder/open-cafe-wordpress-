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

        <div class="l-contact-completion">
            <div class="p-contact-completion">
                <h2 class="p-contact-completion__head">
                    <span class="p-contact-completion__head-main">送信が完了しました</span>
                    <span class="p-contact-completion__head-sub">お問い合わせありがとうございました。<br>3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。</span>
                </h2>
            </div>
            <!-- /.p-contact-completion -->
        </div>
        <!-- /.l-contact-completion -->

<?php get_footer(); ?>