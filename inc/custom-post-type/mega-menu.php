<?php
add_action( 'init', 'post_type_mega_menu', 15 );
function post_type_mega_menu() {
    $labels = array(
        'name' => 'Mega menu',
        'singular_name' => 'Mega menu',
        'add_new' => 'Thêm mới',
        'add_new_item' => 'Thêm mới',
        'edit_item' => 'Sửa',
        'new_item' => 'Thư viện mới',
        'view_item' => 'Xem Mega menu',
        'search_items' => 'Tìm kiếm Mega menu',
        'menu_name' => 'Mega menu',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => '',
        'supports' => array( 'title','thumbnail' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 30,
        'menu_icon' => 'dashicons-editor-justify',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'mega','with_front' => FALSE),
        'public' => true,
        'has_archive' => 'mega_archive',
        'capability_type' => 'post'
    );
    register_post_type( 'mega', $args );//max 20 charachter cannot contain capital letters and spaces
}
