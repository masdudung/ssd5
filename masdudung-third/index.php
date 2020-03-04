<?php
$option = get_option('third-child', array());
set_query_var( 'option', $option);

if( array_key_exists( 'show_maintenance', $option ) )
{
    if( $option['show_maintenance']==1 )
    {
        get_template_part( 'include/theme', 'maintenance' );
        die();        
    }
}
get_header();

get_template_part( 'include/sidebar', 'left' );
get_template_part( 'include/theme', 'body' );
get_template_part( 'include/sidebar', 'right' );

get_footer();
 
?>