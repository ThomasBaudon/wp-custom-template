<footer>
    <nav>
        <?php 
            wp_nav_menu( 
                array( 
                    'theme_location' => 'main', 
                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                    'menu_class' => 'site__header__menu', // ma classe personnalisée 
                ) 
            ); 
        ?>
    </nav>
</footer>
<?php wp_footer() ?>
</body>
</html>