<?php
/**
 * Plugin Name: TN Ejercicios
 * Description: Plugin para los ejercicios de la Semana 3 de Tueste Norte.
 * Version: 1.0
 * Author: David
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function tn_longitud_extracto( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'tn_longitud_extracto' );

/*
Si otro plugin filtrara excerpt_length con prioridad 5 y devolviera 55,
ganaría nuestro filtro y la longitud final sería de 20 palabras.
El filtro con prioridad 5 se ejecutaría primero y nuestro filtro,
que usa la prioridad 10 por defecto, se ejecutaría después.
*/

function tn_comentario_footer() {
    echo '<!-- Página servida el ' . date( 'Y-m-d' ) . ' -->';
}

add_action( 'wp_footer', 'tn_comentario_footer' );