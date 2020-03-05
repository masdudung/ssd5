<?php

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __DIR__, 2 ) . '/ssd4/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

class masdudung_second
{
    function __construct()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'my_theme_enqueue_styles'] );
    }

    function my_theme_enqueue_styles() 
    {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    }
}

$second = new masdudung_second();

?>