<?php
$option = get_option('first-child', array());
set_query_var( 'option', $option);

get_header();


get_template_part( 'include/sidebar', 'left' );
get_template_part( 'include/theme', 'body' );
get_template_part( 'include/sidebar', 'right' );

get_footer();
 
?>