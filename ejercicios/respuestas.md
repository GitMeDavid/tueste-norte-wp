# Ejercicios Semana 2

## Ejercicio 1 - Instalación y puesta a punto

### ¿Por qué al cliente se le da un rol de usuario como Editor y no como Administrador?

Al cliente se le da un usuario con rol Editor porque necesita gestionar el contenido de la web, como crear, editar o publicar entradas y páginas, cambiar textos, subir fotos, etc., pero no necesita, ni debe acceder a la configuración técnica del sitio.

El rol Administrador tiene todos los permisos con los que realizar, incluso, cambios importantes en WordPress. Utilizar el rol Editor permite que el cliente gestione el contenido que necesita y reduce el riesgo de modificar por error aspectos técnicos e importantes de la web.

El administrador ¿Qué hace?: Gestiona usuarios, instala o elimina plugins, gestiona temas, cambia configuraciones, gestiona contenido.
El editor ¿Qué hace?: crea, edita, publica, gestiona contenido.

## Ejercicio 2 · Un child theme mínimo

### ¿Por qué el functions.php del hijo no sustituye al del padre, pero el footer.php sí?

El archivo functions.php del tema hijo no sustituye al functions.php del tema padre. WordPress carga ambos archivos, por lo que el tema hijo puede añadir sus propias funciones sin perder las funcionalidades del tema padre.

En cambio, footer.php es un archivo de plantilla. Si WordPress encuentra un footer.php en el tema hijo, utiliza este archivo en lugar del footer.php del tema padre. De esta forma podemos modificar el pie de página sin tocar directamente los archivos del tema padre.

## Ejercicio 3 . Primer contacto con ACF
### Diferencia entre get_field() y the_field(), cuándo usarías cada uno

get_field() obtiene y devuelve el valor de un campo de ACF, pero no lo muestra directamente en la página. Podemos guardar ese valor en una variable para comprobarlo, modificarlo o utilizarlo posteriormente.

the_field(), en cambio, obtiene el valor del campo y lo muestra directamente en la página.

En resumen, get_field() devuelve el dato y the_field() lo imprime directamente. Dame el dato vs Muestra el dato

Usaríamos get_field() cuando necesite guardar el valor en una variable, comprobar si existe, modificarlo o tratarlo antes de mostrarlo.

Usaríamos the_field() cuando simplemente quiera mostrar directamente en la página el contenido de un campo de ACF sin necesitar trabajar previamente con su valor.