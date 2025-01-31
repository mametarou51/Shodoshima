<?php get_header(); ?>
<main>
    <section class="mainvisual">
        <div class="background-img">
            <p>瀬戸内の風と</p>
            <p>豊かな自然に囲まれた<span>小豆島</span>で、</p>
            <p>日常を忘れ、</p>
            <p>心ほどける<span>ひととき</span>を。</p>
        </div>
    </section>
    <section id="about" class="wrapper">
        <h3 class="sec-title">ABOUT</h3>
        <div class="contents">
            <div class="text">
                <p class="bold">
                    <span class="bold-line">小豆島は、瀬戸内海の東側、四国と</span>
                    <span class="bold-line">本州の間に位置する自然豊かな島。</span>
                </p>
                <p>
                    高松から約20km、岡山から約35kmの距離にあり、アクセスしやすいのも魅力です。
                    周囲には大小さまざまな島々が点在し、オリーブ畑や美しい海岸線が広がる風景が特徴。
                    穏やかな気候とともに、癒しのひとときを過ごすことができます。</p>
            </div>
            <div class="map">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/map.png'); ?>" class="scroll-image scroll-from-right">
            </div>
        </div>
    </section>
    <section id="spot" class="wrapper">
        <h3 class="sec-title">SPOT</h3>
        <div class="box_1">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/エンジェルロード.jpg'); ?>" class="angel_road_img scroll-image scroll-from-left">
            <div class="description">
                <p class="description-title">エンジェルロード</p>
                <p>エンジェルロードは、干潮時に現れる砂の道で、2つの小島をつなぎます。
                    美しい海に囲まれ、夕暮れ時には幻想的な景色が広がる人気のスポット。ロマンチックな雰囲気が漂い、多くのカップルや観光客が訪れる場所です。
                    特に、潮の満ち引きによって変化する景観は、訪れるたびに新しい発見があります</p>
                <a href="<?php echo esc_url(get_permalink( 45)); ?>" class="detail-btn">詳細を見る</a>
            </div>
        </div>
        <div class="box_2">
            <div class="description">
                <p class="description-title">オリーブ公園</p>
                <p>オリーブ公園は、小豆島の豊かな自然の中でオリーブの栽培を体験できる場所です。
                    広大な敷地には、オリーブの木々が並び、美しい景色を楽しむことができます。
                    また、オリーブオイルの製造工程や試食ができる工房もあり、オリーブにまつわる様々な体験が可能です。
                    季節ごとに色とりどりの花が咲き、訪れる人々を楽しませています</p>
                <a href="<?php echo esc_url(get_permalink( 48)); ?>" class="detail-btn">詳細を見る</a>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/olive_park.jpg'); ?>" class="olive_park_img scroll-image scroll-from-right">
        </div>
        <div class="box_3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/tomioka.jpg'); ?>" class="tomioka_shrine_img scroll-image scroll-from-left">
            <div class="description">
                <p class="description-title">富岡八幡神社</p>
                <p>富岡八幡神社は、小豆島の守り神として地元の人々に親しまれています。
                    歴史ある神社で、境内には美しい木々や石畳が広がり、静かな雰囲気が漂います。
                    訪れる人々は、ここでのんびりとしたひとときを過ごし、心を落ち着けることができます。
                    また、神社の周辺には、散策路や地域の特産品を楽しめる店舗もあります</p>
                <a href="<?php echo esc_url(get_permalink( 50)); ?>" class="detail-btn">詳細を見る</a>
            </div>
        </div>
        <div class="box_4">
            <div class="description">
                <p class="description-title">寒霞渓</p>
                <p>寒霞渓は、四季折々の自然の美しさが楽しめる絶景スポットです。
                    特に秋の紅葉が美しく、多くの観光客を魅了します。
                    ロープウェイからの眺めは格別で、瀬戸内海を一望できます。
                    自然の中でゆったりとした時間を過ごしながら、心を癒やすことができる場所です。
                    山々に囲まれたこの場所は、ハイキングや散策にも最適です</p>
                <a href="<?php echo esc_url(get_permalink( 53)); ?>" class="detail-btn">詳細を見る</a>
            </div>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/寒霞渓.jpg'); ?>" class="kankakei_img scroll-image scroll-from-right">
        </div>
    </section>
    <section id="gourmet" class="wrapper">
        <h3 class="sec-title">GOURMET</h3>
        <div class="slider">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/オリーブそうめん.jpg'); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/オリーブ牛ステーキ.jpg'); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/olive_ramen.png'); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/手延べそうめん.jpg'); ?>">
        </div>
    </section>
</main>
<?php get_footer(); ?>