<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="background background<?php echo is_front_page() ? '-home' : '-about'?> ">
            <img class="background__img background<?php echo is_front_page() ? '-home' : '-about'?>__img" src="<?php  header_image() ?>" alt="background header">
        </div>
        <nav class="container header-box">
            <?php
            the_custom_logo();
            wp_nav_menu( [
                'theme_location'  => 'header',
                'menu_class'      => '',
                'container'       => false,
                'echo'            => true,
                'fallback_cb'     => '',
                'items_wrap'      => '<ul class="menu">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ] );
            ?>
            <div class="burger-menu">
                <svg class="burger-menu__svg" width="30px" height="20px" viewBox="0 0 12 12" enable-background="new 0 0 12 12" id="Слой_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g>
                        <rect fill="#FE390C" height="1" width="11" x="0.5" y="5.5"/>      
                        <rect fill="#FE390C" height="1" width="11" x="0.5" y="2.5"/>   
                        <rect fill="#FE390C" height="1" width="11" x="0.5" y="8.5"/>
                        
                        </g> 
                    </svg>
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'header',
                    'menu_class'      => '',
                    'container'       => false,
                    'echo'            => true,
                    'fallback_cb'     => '',
                    'items_wrap'      => '<ul class="burger-menu__wrapper">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
                ?>
            </div> 
            <a class="contact__link" href="contact">contact</a>
        </nav>
    </header>
