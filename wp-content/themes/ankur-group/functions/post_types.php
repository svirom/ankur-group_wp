<?php

//Custom Post Types
add_action( 'init', function() {
    $labels = array(
        'name' => __('Aircrafts'),
        'singular_name' => __('Aircraft'),
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
        'supports' => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('aircraft', $args);
} );

add_action( 'init', function() {
    $labels = array(
        'name' => __('Helicopters'),
        'singular_name' => __('Helicopter'),
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
        'supports' => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('helicopter', $args);
} );

add_action( 'init', function() {
    $labels = array(
        'name' => __('Equipments'),
        'singular_name' => __('Equipment'),
        'add_new' => 'Add new',
        'add_new_item' => 'Add new equipment',
        'edit_item' => 'Edit equipment',
        'new_item' => 'New equipment',
        'view_item' => 'View equipment',
        'view_items' => 'View equipments',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-networking',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('equipment', $args);
} );

add_action( 'init', function() {
    $labels = array(
        'name' => __('Services'),
        'singular_name' => __('Service'),
        'add_new' => 'Add new',
        'add_new_item' => 'Add new service',
        'edit_item' => 'Edit service',
        'new_item' => 'New service',
        'view_item' => 'View service',
        'view_items' => 'View services',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('services', $args);
} );

add_action( 'init', function() {
    $labels = array(
        'name' => __('Components'),
        'singular_name' => __('Component'),
        'add_new' => 'Add new',
        'add_new_item' => 'Add new component',
        'edit_item' => 'Edit component',
        'new_item' => 'New component',
        'view_item' => 'View component',
        'view_items' => 'View components',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('components', $args);
} );


