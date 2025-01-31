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
                console.log('Observing:', entry.target.className);
                if (entry.isIntersecting) {
                    entry.target.classList.add('scroll-active');
                    console.log('Added scroll-active to:', entry.target.className);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px'
        });

        // テキストと画像の監視を設定
        const elements = document.querySelectorAll('.bold-line, .scroll-image');
        console.log('Found elements:', elements.length);
        elements.forEach(element => {
            observer.observe(element);
            console.log('Observing element:', element.className);
        });
    }

    // 初期化を実行
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