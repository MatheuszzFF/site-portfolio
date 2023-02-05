<?php 
    
    //removing useless things from head
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
    remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head');  
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
    remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );

    //add menus 
    add_theme_support( 'menus' );
    register_nav_menu('menu_principal', 'Menu Principal');

    function includeDir($path) {
        $dir      = new RecursiveDirectoryIterator($path);
        $iterator = new RecursiveIteratorIterator($dir);
        foreach ($iterator as $file) {
            $fname = $file->getFilename();
            if (preg_match('%.php$$%', $fname)) {
                require_once($file->getPathname());
            }
        }
    }
    
    includeDir(__DIR__.'/includes/');
    