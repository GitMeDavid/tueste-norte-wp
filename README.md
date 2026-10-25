# Tueste Norte - WordPress

Proyecto realizado durante la Semana 2 de la formación CodeNode.

El proyecto consiste en la adaptación a WordPress de la web "Tueste Norte" realizada durante la Semana 1. La web se ha desarrollado en un entorno local utilizando XAMPP y WordPress.

El sitio permite gestionar desde WordPress las páginas principales, las entradas del blog y las fichas de los distintos cafés.

## Tecnologías utilizadas

- WordPress
- PHP
- HTML5
- CSS3
- JavaScript
- XAMPP
- MySQL
- Git y GitHub

## Tema utilizado

Se ha utilizado Twenty Twenty-One como tema padre.

A partir de él se ha creado el tema hijo `tueste-norte`, donde se han realizado las personalizaciones del proyecto sin modificar directamente los archivos del tema padre.

## Plugins utilizados

- **Advanced Custom Fields (ACF):** utilizado para crear campos personalizados en las fichas de los cafés, como origen, notas de cata, nivel de tueste y precio.
- **Forminator:** utilizado para crear el formulario de contacto de la web.
- **Yoast SEO:** utilizado para incorporar herramientas básicas de posicionamiento SEO al sitio.

## Contenido del sitio

El sitio incluye las páginas Inicio, Quiénes somos, Contacto y Blog.

También se han creado cuatro entradas de cafés: Etiopía, Colombia, Brasil y Guatemala, utilizando campos personalizados de ACF para mostrar su ficha de café.

Además, se ha creado una entrada normal de blog para comprobar que las entradas que no pertenecen a la categoría Cafés se muestran correctamente sin la ficha personalizada.

## Usuario del cliente

Se ha creado el usuario `marta` con el rol de Editor.

Este rol permite gestionar el contenido del sitio sin darle acceso a configuraciones administrativas que podrían afectar al funcionamiento de WordPress.

## Cómo restaurar el proyecto

1. Instalar XAMPP e iniciar Apache y MySQL.
2. Copiar el proyecto en la carpeta `htdocs` de XAMPP con el nombre `tueste-norte-wp`.
3. Crear en phpMyAdmin una base de datos llamada `tueste_norte_wp`.
4. Importar en esa base de datos el archivo `db/tueste-norte.sql` incluido en el proyecto.
5. Crear o configurar el archivo `wp-config.php` con los datos de conexión de la base de datos local.
6. Comprobar que `WP_DEBUG` está activado durante el desarrollo.
7. Abrir en el navegador `http://localhost/tueste-norte-wp`.

## Versionado del proyecto

En el repositorio se versionan principalmente:

- `wp-content`
- `ejercicios`
- `db`
- `README.md`

Los archivos del núcleo de WordPress y el archivo `wp-config.php` quedan excluidos del repositorio mediante `.gitignore`.