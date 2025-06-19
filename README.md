# Proyecto Web Tramo 2 – ProT2_46516214

Este proyecto forma parte de la **Tarea Integradora del Tramo 2** de la materia de Desarrollo Web Responsive. El objetivo principal es aplicar los conocimientos adquiridos sobre HTML, CSS, Bootstrap y diseño responsive, partiendo de una base desarrollada en el Tramo 1.

## 📌 Objetivos

- Crear un sitio web estático responsive utilizando Bootstrap 5.3.
- Incluir distintos componentes y elementos visuales.
- Asegurar compatibilidad para distintos tamaños de pantalla (smartphone, tablet, escritorio).
- Versionar correctamente el código utilizando Git y GitHub.

## 🧩 Contenido del sitio

El sitio contiene al menos 5 páginas HTML enlazadas entre sí:

- `inicio` – Página principal con un **HeroSection** que presenta brevemente a la empresa, seguido de un **catálogo visual de productos**. También puede incluir un carrusel para destacar promociones o novedades.

- `productos` – Página que presenta un **listado completo de productos** disponibles en la tienda. Utiliza tarjetas (cards) para organizar la información de forma responsiva.

- `acerca de` – Página con información sobre la **empresa**, qué comercializa o produce, su **ubicación geográfica** (incluyendo un mapa), y datos de contacto como dirección, teléfono o correo electrónico.

- `quiénes somos` – Página dedicada a presentar al **equipo de trabajo o fundadores** de la empresa. Utiliza **cards** con imágenes y descripciones para cada persona.

- `registro` – Página con un **formulario de registro de usuario**, con disposición horizontal, que incluye campos típicos como nombre, email, contraseña, etc.

- `login` – Página con un **formulario de inicio de sesión** que valida usuario y contraseña. Esta funcionalidad tiene conexión con el backend implementado con CodeIgniter.


## 🎨 Características implementadas

- ✅ **Barra de navegación responsive** con logotipo e íconos.
- ✅ **Buscador** dentro del navbar (no funcional).
- ✅ **Carrusel (Carousel)** en la página principal.
- ✅ **Cards** para mostrar al equipo en "Quiénes somos".
- ✅ **Formulario horizontal** para registro de usuario.
- ✅ **Formulario de login** con campos de usuario y contraseña.
- ✅ **Botones y desplegables** integrados en distintas páginas.
- ✅ **Diseño completamente responsive** utilizando Bootstrap 5.3.
- ✅ **Hoja de estilos personalizada** separada para ajustes propios.

## 💻 Tecnologías utilizadas

- HTML5
- CSS3
- Bootstrap 5.3
- Git & GitHub

## 📁 Estructura del repositorio

```
ProT2_46516214/
├── app/
│ ├── Config/
│ │ ├── App.php # Configura la URL base del proyecto
│ │ └── Routes.php # Agrego las sub-páginas
│ ├── Controllers/
│ │ └── Home.php # Agrego la estructura de las subpaginas
│ └── Views/
│   └── front/
│     ├── componentes/ # componentes que se utilizan dentro de las secciones de las paginas
│     └── secciones/ # secciones que se utilizan dentro de las paginas
├── assets/
│ ├── css/
│ │ ├── [Archivos de bootstrap]
│ │ ├── [Estilos propios]
│ ├── images/
│ │ ├── iPhone16Pro/ # Imágenes del producto (iPhone)
│ │ └── personal/ # Fotos del equipo humano de la empresa
│ └── js/
│   ├── [Archivos de bootstrap]
│   └── theme.js # Script para cambiar entre tema claro y oscuro
└── public/
  └── favicon.png #logo de la pagina
```
> solamente las carpetas usadas

## 📅 Versionado

Este proyecto fue versionado utilizando Git, con al menos tres commits relevantes:

## 🎥 Presentación en video

El proyecto cuenta con un video demostrativo de menos de 5 minutos explicando:

- La interfaz visual del sitio.
- El funcionamiento de los distintos componentes.
- Las decisiones de diseño y desarrollo tomadas.
- La estructura del código backend. <!-- No tengo que hacer -->

## 🔗 Enlaces

- [Video Explicativo]() <!-- link del video -->
- [Repositorio actual – Tramo 2](https://github.com/MatiasSolisSchneeberger/ProT2_46516214)

---

© 2025 – Matías Solís Schneeberger
