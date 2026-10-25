<?php

function mi_child_enqueue_styles() { wp_enqueue_style( /* hemos creado una función con este nombre: mi child enqueue styles. 
Y hemos puesto las instrucciones para cargar los css Estamos diciendo a WordPress, carga la hoja style.css de mi tema padre Twenty Twenty-One*/
    'parent-style',
    get_template_directory_uri() . '/style.css'
); 

wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/style.css', /*estando activo un child theme, apunta al tema hijo */
    array( 'parent-style' ) /* el css del hijo depende del css del padre*/
);

}

add_action( 'wp_enqueue_scripts', 'mi_child_enqueue_styles' ); /*Oye WordPress, cuando llegue el momento de cargar los archivos del frontend 
(wp_enqueue_scripts), ejecuta mi función mi_child_enqueue_styles*/ 