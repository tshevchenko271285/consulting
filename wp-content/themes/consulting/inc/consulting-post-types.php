<?php
/*
 * Register Custom Post Type News
 */
add_action('init', 'register_post_types_news');
function register_post_types_news(){
    register_post_type('consulting_news', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'News', // основное название для типа записи
            'singular_name'      => 'News', // название для одной записи этого типа
            'add_new'            => 'Add News', // для добавления новой записи
            'add_new_item'       => 'Add News', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Write News', // для редактирования типа записи
            'new_item'           => 'New News', // текст новой записи
            'view_item'          => 'View News', // для просмотра записи этого типа.
            'search_items'       => 'Search News', // для поиска по этим типам записи
            'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'News', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => true,
        'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}