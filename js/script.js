$(document).ready(function() {
    // ハンバーガーメニュー
    $('.toggle_btn').on('click', function () {
        $('body').toggleClass('open');
    });
    $('.mask').on('click', function () {
        $('body').removeClass('open');
    });

    // スクロールアニメーション
    function initScrollAnimation() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                console.log('Observing element:', entry.target);
                console.log('Is intersecting:', entry.isIntersecting);
                if (entry.isIntersecting) {
                    entry.target.classList.add('scroll-active');
                    console.log('Added scroll-active to element');
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px'
        });

        // 監視対象の要素を取得
        const elements = document.querySelectorAll('#about .contents .map img, #spot .box_1 img, #spot .box_2 img, #spot .box_3 img, #spot .box_4 img');
        console.log('Found elements:', elements.length);

        // 各要素に対してスクロール方向のクラスを追加
        elements.forEach((element, index) => {
            if (element.closest('.box_1') || element.closest('.box_3')) {
                element.classList.add('scroll-from-left');
            } else {
                element.classList.add('scroll-from-right');
            }
            observer.observe(element);
            console.log('Set up observer for element', index + 1);
        });
    }

    // DOMの読み込み完了後にアニメーションを初期化
    initScrollAnimation();

    // スライダー
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // ピンのホバーアクション
    $('#pin-olive_1').hover(function () {
        $('.explanation_1').addClass('active');
        $(this).addClass('active');
    }, function () {
        $('.explanation_1').removeClass('active');
        $(this).removeClass('active');
    });

    $('#pin-olive_2').hover(function () {
        $('.explanation_2').addClass('active');
        $(this).addClass('active');
    }, function () {
        $('.explanation_2').removeClass('active');
        $(this).removeClass('active');
    });

    $('#pin-olive_3').hover(function () {
        $('.explanation_3').addClass('active');
        $(this).addClass('active');
    }, function () {
        $('.explanation_3').removeClass('active');
        $(this).removeClass('active');
    });

    $('#pin-olive_4').hover(function () {
        $('.explanation_4').addClass('active');
        $(this).addClass('active');
    }, function () {
        $('.explanation_4').removeClass('active');
        $(this).removeClass('active');
    });
}); 