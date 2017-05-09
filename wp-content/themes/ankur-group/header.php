<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <title>
    <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
    <?php if (is_user_logged_in()):?>
        <style>
            /*body>header.main_header { margin-top: 32px;}*/
            @media (max-width: 800px) { body>header.main_header { margin-top: 0px;}}
        </style>
    <?php endif?>
</head>
<body <?php body_class(); ?>>

<!-- Header section -->
    <header class="main_header">    
        <div class="container header_top">
            <div class="container_inner">
                <a class="logo" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="AGC">
                    <h1>ANKUR GROUP CORPORATION</h1>
                </a>
                <div class="social">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>1835 E. Hallandale Beach Dlvd #332, USA, FL. 33009</p>
                    <select>
                        <option>Eng</option>
                        <option>Pt</option>
                        <option>Ru</option>
                    </select>
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'social', 
                            'menu_class' => false, 
                            'container' => false, 
                            'items_wrap' => '<ul>%3$s</ul>'
                        ) ); 
                    ?>
                </div>
            </div>
        </div>
        <div class="container container_nav">
            <div class="container_inner">
                <div class="search_form">
                    <?php get_search_form(); ?>
                </div>
                <button class="search_switch"><i class="fa fa-search"></i></button>
                <a class="logo" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header_fixed_logo.png" alt="AGC">
                    <h2>ANKUR GROUP CORPORATION</h2>
                </a>
                <a class="logo_mobile" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="AGC">
                </a>
                <a class="nav-opener"><span></span></a>
                <nav id="main_menu">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'main', 
                            'menu_class' => false, 
                            'container' => false, 
                            'items_wrap' => '<ul>%3$s</ul>'
                        ) ); 
                    ?>
                </nav>
            </div>
        </div>
    </header>
<!-- End Header section -->