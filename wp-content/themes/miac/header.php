<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<header class="container navbar navbar-expand-lg">
        <?php
        if( has_custom_logo() ){
            echo get_custom_logo();
        }
        ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="nav-panel collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="nav-info">
            <p class="nav-info__phone">+7 (351) 240-12-12</p>
            <div class="nav-info__buttons">
                <a href="#" class="nav-info__button">
                    <img class="nav-info__icon" src="wp-content/themes/miac/images/icon_vk.png" alt="">
                </a>
                <a href="#" class="nav-info__button">
                    <img class="nav-info__icon" src="wp-content/themes/miac/images/icon_vk.png" alt="">
                </a>
                <a href="#" class="nav-info__button">
                    <img class="nav-info__icon" src="wp-content/themes/miac/images/icon_vk.png" alt="">
                </a>
            </div>
        </div>
        <hr>
        <div class="nav-menu">
            <?php 
                wp_nav_menu( [
                    'theme_location'  => 'header',
                    'container'       => false,
                    'menu_class'      => 'navbar-nav',
                    'menu_id'         => false,
                    'echo'            => true,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker'           => new bootstrap_4_walker_nav_menu()
                ] );
            ?>
            <?php get_search_form( $args ); ?>
        </div>
    </nav>
</header>