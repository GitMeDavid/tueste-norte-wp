# Ejercicio 1 — Leer la Template Hierarchy

## 1. Ficha de una entrada del blog

**Caso:** «Cómo preparar café en V60».

WordPress carga `single.php` porque se trata de una entrada individual del blog y este fichero existe en el tema.

## 2. Ficha de un café

**Caso:** CPT `cafe` «Etiopía Yirgacheffe».

WordPress carga `single.php` porque se trata de un contenido individual del CPT `cafe`. Como el tema no dispone de `single-cafe.php`, WordPress continúa por la jerarquía y utiliza `single.php`.

## 3. Listado de todos los cafés

**Caso:** `/cafes/`.

WordPress carga `archive-cafe.php` porque se trata del archivo o listado del CPT `cafe` y el tema dispone de una plantilla específica para ese tipo de contenido.

## 4. Página estática «Quiénes somos»

WordPress carga `index.php` porque se trata de una página estática, pero el tema no dispone de `page.php` ni de otra plantilla más específica para esa página. Por ello, WordPress continúa por la jerarquía hasta utilizar `index.php` como plantilla de último recurso.

## 5. Portada del sitio

WordPress carga `index.php` porque el tema no dispone de una plantilla más específica para la portada, como `front-page.php`. Por ello, WordPress continúa por la jerarquía hasta utilizar `index.php` como plantilla de último recurso.

## 6. Pregunta extra — Plantilla específica para «Quiénes somos»

Crearía el fichero `page-quienes-somos.php`, ya que WordPress puede utilizar una plantilla específica para una página a partir de su slug, que en este caso es `quienes-somos`.

De esta forma, solo la página «Quiénes somos» tendría ese diseño distinto, sin afectar al resto de páginas del sitio.