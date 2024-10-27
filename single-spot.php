<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="mainvisual_spot">
            <div class="background-img_spot"  style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                <h1 class="title_spot"><?php the_title(); ?></h1>
                <p><?php echo get_post_meta(get_the_ID(), 'spot_subtitle', true); // カスタムフィールドからサブタイトルを取得 ?></p>
            </div>
        </section>
        <section id="detail_spot" class="wrapper">
            <?php the_content(); ?>
            <p class="first-title">自然の驚異</p>
            <p class="first"><?php echo get_post_meta(get_the_ID(), 'spot_feature', true); ?></p>
            <p class="second-title">見どころ</p>
            <p class="second"><?php echo get_post_meta(get_the_ID(), 'spot_highlights', true); ?></p>
        </section>
        <section id="access_spot" class="wrapper">
            <h2 class="sec-title">ACCESS</h2>
            <div class="place_spot">
                <div class="google-map">
                    <iframe src="<?php echo esc_url(get_post_meta(get_the_ID(), 'spot_map', true)); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <dl class="info">
                    <dd>住所:</dd>
                    <dt><?php echo get_post_meta(get_the_ID(), 'spot_address', true); ?></dt>
                    <dd>交通手段:</dd>
                    <dt><?php echo get_post_meta(get_the_ID(), 'spot_access', true); ?></dt>
                    <dd>駐車場:</dd>
                    <dt><?php echo get_post_meta(get_the_ID(), 'spot_parking', true); ?></dt>
                </dl>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>