<?php

function tueste_norte_configurar_tema() {
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(
        array(
            'menu-principal' => 'Menú principal',
        )
    );
}

add_action( 'after_setup_theme', 'tueste_norte_configurar_tema' );

function tueste_norte_cargar_estilos() {
    wp_enqueue_style(
        'tueste-norte-style',
        get_stylesheet_uri()
    );
}

add_action( 'wp_enqueue_scripts', 'tueste_norte_cargar_estilos' );