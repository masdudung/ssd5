<?php

get_header();

$show_sidebar = of_get_option('show_sidebar', 1);
if($show_sidebar==1) 
{
    get_template_part( 'include/sidebar', 'left' );
}

get_template_part( 'include/theme', 'body' );

if($show_sidebar==1) 
{
    get_template_part( 'include/sidebar', 'right' );
}

get_footer();
 
?>