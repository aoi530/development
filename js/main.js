$(function () {
    /*=================================================
    ハンバーガーメニュー
    ===================================================*/
    $(function () {
        $('.toggle_btn,nav,.mask').on('click', function () {
            $('header,.side-bar').toggleClass('open');
        });

        $('.side-bar-menu a,.toggle_btn2').on('click', function () {
            $('header,.side-bar').toggleClass('open');
        });

    });

    /*=================================================
    スムーススクロール
    ===================================================*/
    // $('a[href^="#').click(function () {
    //     var href = $(this).attr("href");
    //     var target = $(href == "#" || href == "" ? 'html' : href);
    //     var position = target.offset().top;
    //     var speed = 500;
    //     $("html, body").animate({
    //         scrollTop: position
    //     }, speed, "swing");
    //     return false;
    // });

    /*=================================================
    スクロール時の画像フェード表示
    ===================================================*/
    $(window).scroll(function () {
        $(".fade_in").each(function () {
            let scroll = $(window).scrollTop();
            let target = $(this).offset().top;
            let windowHeight = $(window).height();
            if (scroll > target - windowHeight + 50) {
                $(this).css("opacity", "1");
                $(this).css("transform", "translateY(0)");
            }
        });
    });

    /*===================================================
    ヘッダーのロゴをmainの手前で消す
    ===================================================*/
    const fixedElement = document.querySelector('.fixed-content'); // 非表示にしたい固定要素
    const targetElement = document.querySelector('.active-area'); // 固定要素が差し掛かる対象の要素

    // 固定要素の初期表示状態を設定
    let isHidden = false;

    // スクロールイベントを監視
    window.addEventListener('scroll', () => {
        // 固定要素と対象要素の位置を取得
        const fixedElementRect = fixedElement.getBoundingClientRect();
        const targetElementRect = targetElement.getBoundingClientRect();

        // 固定要素が対象要素に差し掛かった場合、非表示にする
        if (
            fixedElementRect.bottom >= targetElementRect.top &&
            fixedElementRect.top <= targetElementRect.bottom
        ) {
            if (!isHidden) {
                fixedElement.classList.remove('visible'); // 固定要素を非表示にする
                fixedElement.classList.add('active'); // 固定要素を非表示にする
                isHidden = true; // 非表示フラグを設定
            }
        } else {
            if (isHidden) {
                fixedElement.classList.add('visible'); // 固定要素を非表示にする
                fixedElement.classList.remove('active'); // 固定要素を再表示する
                isHidden = false; // 非表示フラグを解除
            }
        }
    });
    
});

