<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap',
        array(),
        '1.0'
    );

    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    wp_register_style(
        'slick_style',
        get_template_directory_uri() . '/slick/slick.css',
        array(),
        '1.0'
    );

    wp_register_style(
        'slick-theme_style',
        get_template_directory_uri() . '/slick/slick-theme.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/style.css',
        array('reset_style', 'google-fonts_style', 'slick_style', 'slick-theme_style'),
        '1.0'
    );
}


add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
    wp_deregister_script('jquery');

    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        array(),
        '1.0',
        true
    );

    wp_register_script(
        'slick_script',
        get_template_directory_uri() . '/slick/slick.min.js',
        array(),
        '1.0',
        true
    );

    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script', 'slick_script'),
        '1.0',
        true
    );
}

function create_spot_post_type() {
    register_post_type('spot',
        array(
            'labels' => array(
                'name' => __('スポット'),
                'singular_name' => __('スポット')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'spot'),
        )
    );
}
add_action('init', 'create_spot_post_type');
add_theme_support('post-thumbnails');
?>