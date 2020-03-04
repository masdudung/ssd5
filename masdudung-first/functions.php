<?php

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/**
 * Front End Customizer
 *
 * WordPress 3.4 Required
 */

class masdudung_first_child
{
    function __construct()
    {
        add_action( 'customize_register', [$this, 'options_theme_customizer_register'] );
        add_action( 'wp_enqueue_scripts', [$this, 'options_stylesheets_alt_style'] );
        // $this->add_theme_support_logo();
    }

    function options_theme_customizer_register($wp_customize) {

        /**
         * This is optional, but if you want to reuse some of the defaults
         * or values you already have built in the options panel, you
         * can load them into $options for easy reference
         */
         
        $options = optionsframework_options();
        
        # add blog info
        $this->blog_info($wp_customize);
        # add blog footer copiyright
        $this->footer_copyright($wp_customize);
        # add blog description
        $this->blog_description($wp_customize);
        
    }

    function blog_info($wp_customize)
    {
        /* Blog Logo */
        $wp_customize->add_section( 'section_blog_logo', array(
            'title' => __( 'Blog Logo', 'option_blog_logo' ),
            'priority' => 110
        ) );
        
        $wp_customize->add_setting( 'option_blog_logo[md_logo]', array(
            'type' => 'option'
        ) );
        
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'md_logo', array(
            'label' => $options['md_logo']['name'],
            'section' => 'section_blog_logo',
            'settings' => 'option_blog_logo[md_logo]'
        ) ) );
    }

    function footer_copyright($wp_customize)
    {
        /* Blog Logo */
        $wp_customize->add_section( 'section_footer_copyright', array(
            'title' => __( 'Footer Copyright', 'option_footer_copyright' ),
            'priority' => 112
        ) );
        
        $wp_customize->add_setting( 'option_blog_footer[md_footer_copyright]', array(
            'default' => $options['md_footer_copyright']['std'],
            'type' => 'option'
        ) );
        
        $wp_customize->add_control( 'md_footer_copyright', array(
            'label' => $options['md_footer_copyright']['name'],
            'section' => 'section_footer_copyright',
            'settings' => 'option_blog_footer[md_footer_copyright]',
            'type' => $options['md_footer_copyright']['type']
        ) );
        
    }

    function blog_description($wp_customize)
    {
        /* Blog Logo */
        $wp_customize->add_section( 'section_blog_description', array(
            'title' => __( 'Blog Description', 'option_blog_description' ),
            'priority' => 112
        ) );
        
        $wp_customize->add_setting( 'option_blog_description[md_blog_description]', array(
            'default' => $options['md_blog_description']['std'],
            'type' => 'option'
        ) );
        
        $wp_customize->add_control( 'md_blog_description', array(
            'label' => $options['md_blog_description']['name'],
            'section' => 'section_blog_description',
            'settings' => 'option_blog_description[md_blog_description]',
            'type' => $options['md_blog_description']['type']
        ) );
        
    }
    

    function options_stylesheets_alt_style() {
        /** 
         *  panggil css tema parent
        */

        if ( of_get_option( 'stylesheet' ) ) {
            wp_enqueue_style( 'options_stylesheets_alt_style', of_get_option('stylesheet'), array(), null );
        }
    }

    function add_theme_support_logo()
    {
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
    }
}

$first = new masdudung_first_child();
?>