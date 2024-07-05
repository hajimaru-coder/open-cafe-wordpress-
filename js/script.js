const swiper = new Swiper('.swiper', {
    // Optional parameters

    //最後のスライドが表示されたら最初に戻る
    loop: true, // ループ有効
    slidesPerView: 1, // 一度に表示する枚数
    effect: "fade",
    speed: 2000,
    autoplay: {
      delay: 4000,  // 4秒で次へ
    },  // 自動で次のページへ
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      type: "bullets",
      clickable: true,  // クリック有効化
    },
  });

// drawer
  jQuery('.drawer-icon, .drawer-background-cover').on('click', function(e) {
    e.preventDefault();  //aタグやボタンなどの動きをなくす記述 ※クリックイベントとセット

    jQuery('.drawer-icon').toggleClass('is-active');
    jQuery('.drawer-content').toggleClass('is-active');
    jQuery('.drawer-background').toggleClass('is-active');
    jQuery('.drawer-background-cover').toggleClass('is-active-cover');

    return false;  //古いブラウザ用 慣例としてつける
  })

  // スクロールしたら表示(to top)
  jQuery(window).on('scroll', function() {

    if ( 150 < jQuery(this).scrollTop()) {
      jQuery('.to-top').addClass('is-show');
      jQuery('.to-top').fadeIn(300);
    } else {
      jQuery('.to-top').removeClass('is-show');
      jQuery('.to-top').fadeOut(300);
    }
  });

  // topページ以外に時ドロワーアイコンを常に表示させる
  jQuery(document).ready(function() {
    // #is-scrollTop が存在するかどうかをチェック
    if (jQuery('#is-scrollTop').length === 0) {
        // #is-scrollTop が存在しない場合、.drawer-icon の表示を変更
        jQuery('.drawer-icon').css('display', 'block');
    }
});

  // スクロールしたら表示(top drawer)
  jQuery(document).ready(function() {
    if (jQuery('#is-scrollTop').length > 0) {
      jQuery(window).on('scroll', function() {

        if ( 740 < jQuery(this).scrollTop()) {
          jQuery('.top-drawer').addClass('is-show');
          jQuery('.top-drawer').fadeIn(300);
        } else {
          jQuery('.top-drawer').removeClass('is-show');
          jQuery('.top-drawer').fadeOut(300);
        }
      });
    }
  });

  // tabのクリックで色固定,リンク遷移
  jQuery('.p-menu-tab-list__item').on("click", function(e) {
    // クリックされた要素がリンク先を持つ場合のみ処理を実行
    if (jQuery(this).find('.p-menu-tab-list__link').length > 0) {
        // デフォルトのクリックイベントをキャンセル
        e.preventDefault();

        // クリックされた要素に is-active クラスを付与
        jQuery('.p-menu-tab-list__item').removeClass('is-active');
        jQuery(this).addClass('is-active');

        // クリックされた要素のリンク先に遷移
        let href = jQuery(this).find('.p-menu-tab-list__link').attr('href');
        if (href !== "#") { // # 以外のリンク先の場合のみ遷移
            window.location.href = href;
        }
    }
  });