<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>ThomasBaudon</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="./style.css">
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

    <?php 
        if ( is_user_logged_in() ):
            $current_user = wp_get_current_user(); 
        ?>
            <p>
                <?php echo $current_user->user_firstname; ?>
                <a href="<?php echo wp_logout_url(); ?>"> Déconnexion </a>
            </p>
        <?php else: ?>
            <p>
                <a href="<?php echo wp_login_url(); ?>"> Connexion </a>
            </p>
    <?php endif; ?>

    <header class="header">
        <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tb-header-logo-couleur.svg" alt="Logo" id="logo">
        </a>
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
    </header>



