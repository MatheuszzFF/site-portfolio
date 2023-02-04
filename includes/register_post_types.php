<?php 
    function cptui_register_my_cpts() {

    /**
     * Post Type: Notícias.
     */

    $labels = [
        "name" => __( "Notícias", "custom-post-type-ui" ),
        "singular_name" => __( "Notícia", "custom-post-type-ui" ),
        "add_new" => __( "Adicionar Nova", "custom-post-type-ui" ),
        "add_new_item" => __( "Adicionar Notícia", "custom-post-type-ui" ),
        "edit_item" => __( "Editar Notícia", "custom-post-type-ui" ),
        "new_item" => __( "Nova Notícia", "custom-post-type-ui" ),
        "view_item" => __( "Ver Notícia", "custom-post-type-ui" ),
        "view_items" => __( "Ver Notícias", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => __( "Notícias", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "/noticias", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "taxonomies" => [ "category" ],
        "show_in_graphql" => false,
        'supports' => array('title','editor','thumbnail')
    ];

    register_post_type( "news", $args );
    }

    add_action( 'init', 'cptui_register_my_cpts' );