document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('scroll-active');
                // 一度表示されたら監視を解除
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2, // 要素が20%表示されたらトリガー
        rootMargin: '0px' // ビューポートの端から0pxの位置でトリガー
    });

    // テキストの監視
    const boldLines = document.querySelectorAll('.bold-line');
    boldLines.forEach(element => {
        observer.observe(element);
    });

    // 画像の監視
    const slideImages = document.querySelectorAll('.slide-image');
    slideImages.forEach(element => {
        observer.observe(element);
    });
}); 