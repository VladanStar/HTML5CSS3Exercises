<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>

    <!-- nav -->
    <nav>
        <div class="container">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png" alt=""></a>
            
            <?php 
                $args  = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu(); ?>
<!--
            <ul>
                <li><a href="">Naslovna</a></li> 
                <li><a href="">Projekti</a></li>
                <li><a href="">Kontakt</a></li>
            </ul>
-->
        </div>
    </nav>