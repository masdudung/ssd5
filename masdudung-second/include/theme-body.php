<div class="col-sm-8 blog-main">
<?php

global $wp_query;
$post_limit = $option['post_limit'];
$args = array_merge( $wp_query->query_vars, ['posts_per_page' => $post_limit ] );
query_posts( $args );

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h2>
        <P><?php the_content() ?></P>
    </div>
 
<?php endwhile;
 
else :
    echo '<div class="blog-post">';
    echo '<h2 class="blog-post-title">There are no posts!</h2>';
    echo '</div>' ;
endif;

?>
    </div>
    <!-- /.blog-main -->

