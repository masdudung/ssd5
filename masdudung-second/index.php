<?php
$option = get_option('second-child', array());
set_query_var( 'option', $option);

get_header();


if(array_key_exists('show_sidebar', $option))
{

    if($option['show_sidebar']==1) 
    {
        get_template_part( 'include/sidebar', 'left' );
    }
}

get_template_part( 'include/theme', 'body' );

if(array_key_exists('show_sidebar', $option))
{

    if($option['show_sidebar']==1) 
    {
        get_template_part( 'include/sidebar', 'right' );
    }
}


get_footer();
 
?>