# 📁 Estructura de Proyectos

Esta carpeta contiene todos los proyectos individuales del portafolio de Audify.

## 📂 Estructura de Carpetas

```
proyectos/
├── wibbux/
│   └── index.html
├── banco-bice/
│   └── index.html
├── rydox/
│   └── index.html
├── racional/
│   └── index.html
└── README.md
```

## ✨ Cómo Agregar un Nuevo Proyecto

### 1. Crear la carpeta del proyecto

```bash
mkdir proyectos/nombre-del-proyecto
```

### 2. Copiar el template

Duplica cualquiera de los `index.html` existentes como base:

```bash
cp proyectos/wibbux/index.html proyectos/nombre-del-proyecto/index.html
```

### 3. Personalizar el contenido

Edita el `index.html` del nuevo proyecto y actualiza:

- **Título de la página** (línea 6): `<title>Nombre del Proyecto - Audify</title>`
- **Hero Section**:
  - Nombre del proyecto: `<h1>Nombre del Proyecto</h1>`
  - Tipo de proyecto: `<p class="project-type">Tipo • Categoría</p>`
  - Datos rápidos: Cliente, Servicio, Año, Tecnologías
- **Imágenes**: Actualiza todas las rutas de imágenes
- **Contexto**: "El Desafío" y "Nuestra Solución"
- **Showcase**: Agrega 3 imágenes destacadas
- **Resultados**: Actualiza las métricas y beneficios
- **Testimonio**: Agrega la cita del cliente

### 4. Agregar al index principal

En `index.html` (raíz), agrega un nuevo item en la sección de portfolio:

```html
<div class="portfolio-item">
    <div class="portfolio-visual">
        <img src="img/portfolio/nombre-proyecto.jpg" alt="Proyecto Nombre">
    </div>
    <div class="portfolio-info">
        <h3 class="portfolio-name">Nombre del Proyecto</h3>
        <a href="proyectos/nombre-del-proyecto/" class="portfolio-link">Ver proyecto</a>
    </div>
</div>
```

## 🎨 Estilos

Todos los proyectos comparten los mismos archivos CSS:
- `assets/css/style.css` - Estilos globales
- `assets/css/proyecto.css` - Estilos específicos de páginas de proyecto

## 📝 Tips

- Mantén el nombre de las carpetas en **minúsculas** y con **guiones** (ej: `banco-bice`)
- Usa imágenes de alta calidad (mínimo 1200px de ancho)
- Las rutas a CSS e imágenes usan `../../` para subir dos niveles desde la carpeta del proyecto
- Cada proyecto es independiente, puedes personalizarlo sin afectar los demás

## 🔗 Rutas Relativas

Desde cualquier `proyectos/[nombre]/index.html`:
- CSS: `../../assets/css/`
- Imágenes: `../../assets/img/` o `../../img/`
- Volver al inicio: `../../index.html`

