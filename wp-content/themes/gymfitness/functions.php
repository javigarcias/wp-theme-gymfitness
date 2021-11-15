<?php

function crossfit_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'gymcrossfit' )
    ));
}

add_action('init', 'crossfit_menus');

