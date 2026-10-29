<?php
/**
 * Plugin Name: Tueste Norte - Funcionalidades
 * Description: Funcionalidades propias para la web de Tueste Norte.
 * Version: 1.0
 * Author: David
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function tueste_norte_registrar_cafe() {
      $labels = array(
        'name'          => 'Cafés',
        'singular_name' => 'Café',
        'add_new'       => 'Añadir café',
        'add_new_item'  => 'Añadir nuevo café',
        'edit_item'     => 'Editar café',
        'new_item'      => 'Nuevo café',
        'view_item'     => 'Ver café',
        'search_items'  => 'Buscar cafés',
    );

    $args = array(
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'show_in_rest' => true,
        'rest_base'    => 'cafes',
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'cafe', $args );
}

add_action( 'init', 'tueste_norte_registrar_cafe' );