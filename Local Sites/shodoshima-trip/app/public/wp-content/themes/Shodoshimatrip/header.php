<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shodoshima</title>
    <? wp_head(); ?>
</head>

<body>
    <header>
        <div class="top">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/Group 24.png' ); ?>" class="logo_title">
        </div>
        <div class="header-bar">
            <a class="logo-mark" href="<?php echo esc_url( home_url() ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/black.png' ); ?>" class="logo">
            </a>
            <div class="toggle_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="mask"></div>
        <nav class="navi">
            <ul>
                <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                <li><a href="<?php echo esc_url(home_url('#about')); ?>">ABOUT</a></li>
                <li><a href="<?php echo esc_url(home_url('#spot')); ?>">SPOT</a></li>
                <li><a href="<?php echo esc_url(home_url('/gourmet')); ?>">GOURMET</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">CONTACT</a></li>
            </ul>
        </nav>
    </header>