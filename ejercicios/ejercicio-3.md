# Ejercicio 3 — Explorar la REST API con curl

## 1. Obtener las entradas mostrando solo id, slug y title

Comando utilizado:

```powershell
curl.exe "http://localhost/tueste-norte-wp/wp-json/wp/v2/posts?_fields=id,slug,title"
```
Respuesta representativa:

```json
{
  "id": 52,
  "slug": "guatemala-volcan",
  "title": {
    "rendered": "Guatemala Volcán"
  }
}
```

## 2. Obtener una entrada concreta por su slug

Comando utilizado:

```powershell
curl.exe "http://localhost/tueste-norte-wp/wp-json/wp/v2/posts?slug=guatemala-volcan&_fields=id,slug,title"
```

Respuesta representativa: 

```json
[
  {
    "id": 52,
    "slug": "guatemala-volcan",
    "title": {
      "rendered": "Guatemala Volcán"
    }
  }
]
```

## 3. Obtener las páginas mostrando solo id, slug y title

Comando utilizado:

```powershell
curl.exe "http://localhost/tueste-norte-wp/wp-json/wp/v2/pages?_fields=id,slug,title"
```

Respuesta representativa:

```json
[
  {
    "id": 22,
    "slug": "blog",
    "title": {
      "rendered": "Blog"
    }
  },
  {
    "id": 20,
    "slug": "contacto",
    "title": {
      "rendered": "Contacto"
    }
  },
  {
    "id": 18,
    "slug": "quienes-somos",
    "title": {
      "rendered": "Quiénes somos"
    }
  },
  {
    "id": 16,
    "slug": "inicio",
    "title": {
      "rendered": "Inicio"
    }
  }
]
```

## 4. Consultar un tipo de contenido que no existe

Comando utilizado:

```powershell
curl.exe "http://localhost/tueste-norte-wp/wp-json/wp/v2/tazas"
```

Respuesta obtenida:

```json
{
  "code": "rest_no_route",
  "message": "No se ha encontrado ninguna ruta que coincida con la URL y el método de la solicitud.",
  "data": {
    "status": 404
  }
}
```

El código de error es `rest_no_route` y el estado HTTP es `404`. Esto indica que WordPress no ha encontrado una ruta de la REST API que coincida con `/wp-json/wp/v2/tazas`.