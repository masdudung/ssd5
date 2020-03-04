</div><!-- closes <div class=row"> -->
    
<footer class="site-footer">
    <hr>
    <p>
        <?php bloginfo( 'name' ) ?>
        footer  
        <?php
        wp_nav_menu( array( 
            'theme_location' => 'footer-menu', 
            'container_class' => 'footer-menu' ) 
        ); 
        ?>
    </p>
    <p>
    <?php
    $option = get_option('first-child', array());
    if(array_key_exists('blog_description', $option))
    {
        echo $option['blog_description'];
    }
    ?>
    </p>
    <p>
    <?php
    $option = get_option('first-child', array());
    if(array_key_exists('footer_copyright', $option))
    {
        echo $option['footer_copyright'];
    }
    ?>
    </p>
</footer>
</div> <!-- closes <div class=container"> -->

<?php wp_footer() ?>
</body>
</html>