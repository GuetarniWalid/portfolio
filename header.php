<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Allerta&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>
    <!-- Navbar -->
    <header id="header-menu">

        <?php wp_nav_menu(array(
            'container' => 'nav',
            'container_id' => 'reseaux',
            'theme_location' => 'header-left'
        )) ?>
        

        <button class="fas fa-bars mobile-bars" onclick="mobileToggler()"></button>
        <?php wp_nav_menu(array(
            'container' => 'nav',
            'container_id' => 'principale',
            'theme_location' => 'header',
        )) ?>


    </header>