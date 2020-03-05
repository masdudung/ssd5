<?php

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __DIR__, 2 ) . '/ssd4/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

class masdudung_third
{
    function __construct()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'my_theme_enqueue_styles'] );
        add_action( 'get_header', [$this, 'wp_maintenance_mode'] );   
    }

    function my_theme_enqueue_styles() 
    {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }

    function wp_maintenance_mode() 
    {
        $option = get_option('third-child', array());
        if( array_key_exists( 'show_maintenance', $option ) )
        {
            if( $option['show_maintenance']==1 )
            {
                if (!current_user_can('edit_themes') || !is_user_logged_in()) {
                    wp_die('<h1>Under Maintenance</h1><br />Website under planned maintenance. Please check back later.');
                }     
            }
        }
    }
}

$third = new masdudung_third();



?>