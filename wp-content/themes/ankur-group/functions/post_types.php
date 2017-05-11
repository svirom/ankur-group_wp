<?php

//Custom Post Types
add_action( 'init', function() {
    $labels = array(
        'name' => 'Aircrafts',
        'singular_name' => 'Aircraft',
        'add_new' => 'Add new',
        'add_new_item' => 'Add new aircraft',
        'edit_item' => 'Edit aircraft',
        'new_item' => 'New aircraft',
        'view_item' => 'View aircraft',
        'view_items' => 'View aircrafts',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-controls-forward',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('aircraft', $args);
} );

add_action( 'init', function() {
    $labels = array(
        'name' => 'Helicopters',
        'singular_name' => 'Helicopter',
        'add_new' => 'Add new',
        'add_new_item' => 'Add new helicopter',
        'edit_item' => 'Edit helicopter',
        'new_item' => 'New helicopter',
        'view_item' => 'View helicopter',
        'view_items' => 'View helicopters',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-controls-skipforward',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('helicopter', $args);
} );

/*add_action( 'init', function() {
    $labels = array(
        'name' => 'Рецепты (алког.)',
        'singular_name' => 'Рецепт(алк)',
        'add_new' => 'Добавить новый',
        'add_new_item' => 'Добавить новый рецепт(алк)',
        'edit_item' => 'Редактировать рецепт',
        'new_item' => 'Новый рецепт(алк)',
        'view' => 'Смотреть',
        'view_item' => 'Смотреть рецепт(алк)',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-star-filled',
        'menu_position' => 4,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail',),
    );
    register_post_type('receipt_a', $args);
} );

add_action( 'init', function() {
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнер',
        'add_new' => 'Добавить новый',
        'add_new_item' => 'Добавить нового партнера',
        'edit_item' => 'Редактировать запись',
        'new_item' => 'Новый партнер',
        'view' => 'Смотреть',
        'view_item' => 'Смотреть запись',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 4,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail',),
    );
    register_post_type('partner', $args);
} );*/
