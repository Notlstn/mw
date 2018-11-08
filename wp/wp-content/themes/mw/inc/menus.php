<?php

/**
 * Register navigation menu.
 *
 * @return void
 */
function register_menus() {
    register_nav_menu( 'main-header-menu', "Główne menu strony" );
    register_nav_menu( 'top-header-menu', "Menu nad głównym menu strony" );
    register_nav_menu( 'more-header-menu', "Więcej w menu strony" );
}
add_action( 'after_setup_theme', 'register_menus' );
