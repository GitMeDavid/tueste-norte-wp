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
        'rewrite' => array( 'slug' => 'cafes' ),
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'cafe', $args );
}

add_action( 'init', 'tueste_norte_registrar_cafe' );

function tueste_norte_anadir_menu() {
    add_options_page(
        'Tueste de la semana',
        'Tueste de la semana',
        'manage_options',
        'tueste-norte-tueste-semana',
        'tueste_norte_mostrar_pagina'
    );
}

add_action( 'admin_menu', 'tueste_norte_anadir_menu' );

function tueste_norte_mostrar_pagina() {
    $cafe_semana = get_option( 'tueste_norte_cafe_semana' );
   $cafes = get_posts(
        array(
            'post_type'      => 'cafe',
            'posts_per_page' => -1,
        )
    );

    ?>
    <div class="wrap">
        <h1>Tueste de la semana</h1>
        <p>Selecciona el café que será el tueste destacado de la semana.</p>
        <form method="post" action="options.php">

    <?php settings_fields( 'tueste_norte_ajustes' ); ?>

    <select name="tueste_norte_cafe_semana">

        <?php foreach ( $cafes as $cafe ) : ?>

            <option value="<?php echo $cafe->ID; ?>" <?php selected( $cafe_semana, $cafe->ID ); ?>>
                <?php echo esc_html( $cafe->post_title ); ?>
            </option>

        <?php endforeach; ?>

    </select>

    <?php submit_button( 'Guardar tueste de la semana' ); ?>

</form>
    </div>
    <?php
}

function tueste_norte_registrar_ajustes() {
    register_setting(
        'tueste_norte_ajustes',
        'tueste_norte_cafe_semana'
    );
}

add_action( 'admin_init', 'tueste_norte_registrar_ajustes' );

function tueste_norte_destacar_cafe( $contenido ) {

    $cafe_semana = get_option( 'tueste_norte_cafe_semana' );

    if ( is_singular( 'cafe' ) && get_the_ID() == $cafe_semana ) {
        $contenido .= '<p><strong>⭐ Tueste de la semana</strong></p>';
    }

    return $contenido;
}

add_filter( 'the_content', 'tueste_norte_destacar_cafe' );
