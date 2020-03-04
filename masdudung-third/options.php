<?php
/**
 * The theme option name is set as 'options-theme-customizer' here.
 * In your own project, you should use a different option name.
 * I'd recommend using the name of your theme.
 *
 * This option name will be used later when we set up the options
 * for the front end theme customizer.
 */

function optionsframework_option_name() {

	return 'third-child';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 */

function optionsframework_options() {

    $options['blog_logo'] = array(
        "name" => "Logo",
        "desc" => "This creates a full size uploader that previews the image.",
        "id" => "blog_logo",
        "type" => "upload" );
    
    $options['show_maintenance'] = array(
        "name" => "Show Sidebar",
        "desc" => "show maintenance page",
        "id" => "show_maintenance",
        "std" => "0",
        "type" => "checkbox" );
    $options[] = array();
    $options[] = array();

	return $options;
}
