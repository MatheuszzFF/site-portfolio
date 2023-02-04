<?php 
    function register_portfolio_script_style() {
        //JS
        wp_enqueue_script('main',  get_template_directory_uri() . "/js/main.js", '', '' , true );
    }

    add_action('wp_enqueue_scripts', 'register_portfolio_script_style');