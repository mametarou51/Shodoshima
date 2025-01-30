<?php get_header();
if (have_posts()):
    while (have_posts()):
        the_post();

        // 本文の内容を表示
        the_content();
    endwhile;
endif;

get_footer();
?>
