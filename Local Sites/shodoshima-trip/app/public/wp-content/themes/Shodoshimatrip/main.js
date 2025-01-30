$(function () {
    $('.slider').slick({
        autoplay: true,
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>'
    });
});


$(function () {

    $('.toggle_btn').on('click', function () {

        if ($('header').hasClass('open')) {

            $('header').removeClass('open');


        } else {
            $('header').addClass('open');
        }
    });

    $('.navi').on('click', function () {
        $('header').removeClass('open')
    })
});


// 


$(document).ready(function () {
    $('a[class^="place-btn_"]').click(function (event) {
        event.preventDefault();

        const className = $(this).attr('class');
        const index = parseInt(className.split('_')[1], 10);

        if (isNaN(index) || index < 1 || index > 4) {
            console.error('Invalid index:', index);
            return;
        }

        $('.pin, .explanation a').removeClass('active');

        const pinElement = $('#pin-olive_' + index);
        pinElement.addClass('active');
        $('.explanation a.explanation_' + index).addClass('active');

        if (pinElement.length) {
            pinElement[0].scrollIntoView({ behavior: 'smooth' });

            setTimeout(() => {
                window.scrollBy(0, 120);
            }, 300); 
        } else {
            console.error('Target element does not exist:', '#pin-olive_' + index);
        }
    });
});

// $(document).ready(function() { 
//     $('a').on('click', function(e) {
//         const targetUrl = $(this).attr('href'); // クリックされたリンクのURLを取得
//         if (targetUrl) {
//             e.preventDefault(); // デフォルトのリンク動作を防ぐ
//             window.location.href = targetUrl + "?offset=140"; // 直接遷移
//         }
//     });
// });


// $(document).ready(function () {
//     $('a[class^="place-btn_"]').click(function (event) {
//         event.preventDefault();

//         const className = $(this).attr('class');
//         const index = parseInt(className.split('_')[1], 10);

//         if (isNaN(index) || index < 1 || index > 4) {
//             console.error('Invalid index:', index);
//             return;
//         }

//         $('.pin, .explanation a').removeClass('active');

//         const pinElement = $('#pin-olive_' + index); 
//         pinElement.addClass('active');
//         $('.explanation a.explanation_' + index).addClass('active');

//         if (pinElement.length) {
//             pinElement[0].scrollIntoView({ behavior: 'smooth' });
//         } else {
//             console.error('Target element does not exist:', '#pin-olive_' + index);
//         }
//     });
// });
