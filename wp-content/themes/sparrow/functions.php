<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'script_theme');
add_action( 'after_setup_theme', 'action_function_name' );
add_action( 'init', 'register_post_types' );

function register_post_types() {
    register_post_type( 'video_library', [
        'label'  => null,
        'labels' => [
            'name'               => 'Видеотека', // основное название для типа записи
            'singular_name'      => 'Видео', // название для одной записи этого типа
            'add_new'            => 'Добавить видео', // для добавления новой записи
            'add_new_item'       => 'Добавление видео', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование видео', // для редактирования типа записи
            'new_item'           => 'Новое видео', // текст новой записи
            'view_item'          => 'Смотреть видео', // для просмотра записи этого типа.
            'search_items'       => 'Искать видео', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Видеотека', // название меню
        ],
        'description'         => 'Все видео',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'post-formats'],// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}

function action_function_name() {
    register_nav_menu('top_menu', 'Верхнее меню');
    register_nav_menu('bottom_menu', 'Нижнее меню');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', ['post', 'video_library']);
    add_theme_support('post-formats', ['video', 'aside', 'gallery', 'chat']);
    add_image_size('spec_thumb', 600, 626, true);
}

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}

function script_theme() {
//    wp_deregister_script('jquery');
//    wp_register_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
//    wp_enqueue_script('jquery');
//    wp_enqueue_script('flexslider');
//    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', ['jquery'], null, true);
//    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/jquery.doubletaptogo.js', ['jquery'], null, true);
//    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js', ['jquery'], null, true);
//    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', null, null, true);
}

















