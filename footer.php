<footer class="wrapper">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/black.png'); ?>">
        <div class="list-wrapper">
            <ul class="footer-list"><a href="<?php echo esc_url( get_permalink(get_page_by_path('contact'))); ?>" class="list-title">CONTACT</a></ul>
            <ul class="footer-list">
                <a href="<?php echo esc_url( home_url('#spot')); ?>" class="list-title">SPOT</a>
                <li><a href="<?php echo esc_url(get_permalink( 45)); ?>">エンジェルロード</a></li>
                <li><a href="<?php echo esc_url(get_permalink( 48)); ?>">オリーブ公園</a></li>
                <li><a href="<?php echo esc_url(get_permalink( 50)); ?>">富岡八幡神社</a></li>
                <li><a href="<?php echo esc_url(get_permalink( 53)); ?>">寒霞渓</a></li>
            </ul>
            <ul class="footer-list">
                <a href="<?php echo esc_url( home_url('#gourmet')); ?>" class="list-title">GOURMET</a>
                <li><a href="">オリーブラーメン</a></li>
                <li><a href="">オリーブそうめん</a></li>
                <li><a href="">オリーブ牛ステーキ</a></li>
                <li><a href="">手延べそうめん</a></li>
            </ul>
        </div>
        <p class="copyright">copyright@2024</p>
    </footer>
    <? wp_footer(); ?>
</body>

</html>