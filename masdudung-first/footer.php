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
    $blog_description = of_get_option('blog_description', null);
    if($blog_description)
    {
        echo $blog_description;
    }
    ?>
    </p>
    <p>
    <?php
    $footer_copyright = of_get_option('footer_copyright', null);
    if($footer_copyright)
    {
        echo $footer_copyright;
    }
    ?>
    </p>
</footer>
</div> <!-- closes <div class=container"> -->

<?php wp_footer() ?>
</body>
</html>