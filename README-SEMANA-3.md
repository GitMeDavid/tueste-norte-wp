# Tueste Norte - Semana 3

Proyecto realizado durante la Semana 3 de la formación CodeNode.

En esta semana se ha evolucionado el proyecto Tueste Norte creando un tema propio de WordPress desde cero, un plugin propio para las funcionalidades del proyecto y un Custom Post Type (CPT) llamado `cafe` para gestionar el catálogo de cafés de forma independiente al blog.

## Tema propio

Se ha creado desde cero el tema `tueste-norte-theme`, sin utilizar un tema hijo ni un tema de terceros como base.

El tema incluye los siguientes archivos principales:

- `style.css`: contiene la cabecera del tema y sus estilos.
- `index.php`: plantilla general del tema.
- `header.php`: cabecera de la web e incluye `wp_head()`.
- `footer.php`: pie de página e incluye `wp_footer()`.
- `functions.php`: configura las funcionalidades del tema y carga correctamente la hoja de estilos.
- `single.php`: plantilla para las entradas individuales del blog.
- `single-cafe.php`: plantilla individual para los cafés.
- `archive-cafe.php`: plantilla para el archivo del catálogo de cafés.

La plantilla `single-cafe.php` muestra la descripción, la imagen destacada y los campos personalizados de cada café.

## Plugin propio

Se ha creado el plugin `tueste-norte-plugin`, encargado de las funcionalidades propias del proyecto.

El plugin registra el Custom Post Type (CPT) `cafe`, que permite gestionar los cafés de forma independiente a las entradas normales del blog.

El CPT está configurado con `show_in_rest` y con `rest_base` igual a `cafes`, por lo que los cafés pueden consultarse mediante la API REST de WordPress.

El plugin también incorpora el sistema "Tueste de la semana", que permite seleccionar desde el panel de administración de WordPress qué café será el destacado, sin necesidad de modificar el código.

Para su funcionamiento se utilizan acciones de WordPress mediante `add_action()` y un filtro mediante `add_filter()`.

## Cafés y campos personalizados ACF

Se han creado cuatro cafés dentro del CPT `cafe`:

- Etiopía Amanecer
- Colombia Sierra
- Brasil Horizonte
- Guatemala Volcán

Cada café dispone de descripción, imagen destacada y los siguientes campos personalizados creados con Advanced Custom Fields (ACF):

- `origen`: origen del café.
- `notas_cata`: notas de cata del café.
- `nivel_tueste`: nivel de tueste.
- `precio`: precio del café.

Los campos ACF están configurados para mostrarse también en la API REST.

## API REST

El catálogo de cafés está disponible mediante la API REST de WordPress en la siguiente ruta:

`/wp-json/wp/v2/cafes`

Cada café devuelve la información necesaria para poder utilizar sus datos desde una aplicación externa: título, descripción, imagen destacada y campos personalizados ACF.

Ejemplo simplificado de la respuesta JSON:

```json
{
  "title": {
    "rendered": "Guatemala Volcán"
  },
  "content": {
    "rendered": "Café de origen guatemalteco..."
  },
  "acf": {
    "origen": "Guatemala",
    "notas_cata": "Cacao, especias y caramelo.",
    "nivel_tueste": "oscuro",
    "precio": 11.5
  },
  "imagen_destacada": "http://localhost/tueste-norte-wp/wp-content/uploads/2026/10/christoph-coffee-171653.jpg"
}
```

## Activación del proyecto

Para utilizar las funcionalidades desarrolladas durante la Semana 3:

1. Activar el tema `Tueste Norte - Tema propio` desde `Apariencia > Temas`.
2. Activar el plugin `Tueste Norte - Funcionalidades` desde `Plugins`.
3. Tener instalado y activado Advanced Custom Fields (ACF).
4. Comprobar que el grupo de campos `Ficha de café` está asociado al tipo de contenido `Café`.
5. Comprobar que los campos ACF están configurados para mostrarse en la API REST.
6. Acceder a `Ajustes > Tueste de la semana` para seleccionar el café destacado.
7. Guardar los enlaces permanentes desde `Ajustes > Enlaces permanentes` si las URLs de los cafés muestran un error 404.

## Decisión sobre el Tueste de la semana

El "Tueste de la semana" se ha implementado dentro del plugin propio mediante una página de ajustes de WordPress.

Desde `Ajustes > Tueste de la semana`, el usuario puede seleccionar uno de los cafés disponibles mediante un desplegable y guardar la elección sin modificar el código.

La elección se almacena como una opción de WordPress mediante `register_setting()` y se recupera mediante `get_option()`.

Se ha elegido esta solución porque permite que el cliente pueda cambiar fácilmente el café destacado desde el panel de administración.

El plugin utiliza acciones de WordPress para registrar sus funcionalidades y el filtro `the_content` para añadir el texto "Tueste de la semana" únicamente al café que haya sido seleccionado.