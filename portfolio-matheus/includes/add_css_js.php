<?php 
    function portfolio_register_scripts() {
         wp_register_script('main',  get_template_directory_uri() . "/js/main.js", '', true, '' );
        wp_enqueue_script('main');
    }

    add_action('wp_enqueue_scripts', 'portfolio_register_scripts');