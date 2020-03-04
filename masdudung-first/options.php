<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	$optionsframework_settings = get_option('optionsframework');
	
	// Edit 'options-theme-customizer' and set your own theme name instead
	$optionsframework_settings['id'] = 'options_theme_customizer';
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */
function optionsframework_options() {


	// $options['example_uploader'] = array(
	// 	"name" => "Uploader Test",
	// 	"desc" => "This creates a full size uploader that previews the image.",
	// 	"id" => "example_uploader",
	// 	"type" => "upload" );
		
	return $options;
}
