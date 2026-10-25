<?php //«Función de Tueste Norte para poner en cola/cargar los estilos»
function tueste_norte_enqueue_styles() {
     wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    ); //esta función apunta al directorio del tema padre twentytwentyone. Y le decimos que queremos cargar el style.css del tema padre

    wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( 'parent-style' ),
filemtime( get_stylesheet_directory() . '/style.css' ) /* con filemtime() cada vez que modifiques style.css, WordPress cambiará automáticamente su versión y será mucho menos probable que vuelvas a encontrarte con este problema de caché.*/
); /* esta función apunta al directorio del tema hijo, nuestro child theme tueste norte, y array('parent-style') 
indica que nuestro CSS hijo depende del CSS del padre, por lo que WordPress debe cargar primero el del padre y después el nuestro.*/
wp_enqueue_script(
    'tueste-norte-script',
    get_stylesheet_directory_uri() . '/script.js',
    array(),
    null,
    true
);
}

add_action( 'wp_enqueue_scripts', 'tueste_norte_enqueue_styles' ); /*le decimos a wordpress que cuando llegue el momento de cargar 
los script y estilos, ejecuta mi función, y lo hacemos mediante wp_enqueue_style(), sin  utilizar @import*/