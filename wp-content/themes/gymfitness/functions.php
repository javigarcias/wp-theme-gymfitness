<?php

//Menus de navegacion
function crossfit_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'gymcrossfit' )
    ));
}

add_action('init', 'crossfit_menus');

// Scripts y Styles
function crossfit_scripts_stiles() {
    //Hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'crossfit_scripts_stiles');
