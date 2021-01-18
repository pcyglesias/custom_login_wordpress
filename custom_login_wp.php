<?php
    /*
        Plugin Name: Custom Login for Wordpress Developers, like a custom plugin.
        Plugin URI: https://github.com/pcyglesias/custom_login_wordpress/
        Description: Custom Login for Wordpress Developers, like a custom plugin.
        Version: 0.1
        Author: Pablo Coto Yglesias.
        Author URI: https://github.com/pcyglesias/
        License: 
        License URI: 
    */

    // Static route defined for assets dir.
    define( 'CLWD_URL', plugin_dir_url( __FILE__ ) );
    // Add Custom Styles.
    function login_css() {
        wp_enqueue_style( 'custom-login', WOOAPI_URL.'assets/login.css' );
    }
    // Add Custom Title Tab.
    function url_title() {
        return 'Custom Tab | Login';
    }
    // Add Custom Favicon Tab.
    function add_site_favicon() {
        echo "<link rel='icon' type='image/svg+xml' href='{ WOOAPI_URL }/favicon.svg' sizes='any'>";
    }
    // Add Hooks
    add_filter( 'login_headertext', 'url_title' );
    add_action( 'login_head', 'add_site_favicon' );
    add_action( 'login_enqueue_scripts', 'login_css' );
