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
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>         
                    </ul>
                </div>
            </div>
        </div>
        <div class="container container_nav">
            <div class="container_inner">
                <div class="search_form">
                    <form action="/" method="get">
                        <input type="search" value="" placeholder="Search">
                        <button type="submit" value=""><i class="fa fa-search"></i></button>
                    </form>
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
                    <ul>
                        <li><a href="#what_we_offer">What We Offer</a></li>
                        <li><a href="#documentation">Documentation</a></li>
                        <li><a href="#contacts">Contacts</a></li>
                        <li><a href="#articles">Articles</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<!-- End Header section -->