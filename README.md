# Modernización y Optimización de Sitio Web FoodPack

## 1\. Visión General del Proyecto: Migración de Tema y Optimización de Rendimiento

El objetivo central de este proyecto es la **migración completa del sitio web foodpack.cl a un nuevo tema personalizado de WordPress**, con un enfoque primordial en la **optimización del rendimiento, la limpieza del código y la eliminación de dependencias obsoletas**. Se busca transformar un sitio "sobrecargado de scripts" y dependiente de Elementor y el tema "Grano" en una plataforma "rápida, moderna y fácil de mantener en el futuro".

La Fase 0, de preparación y análisis, se ha completado exitosamente, proporcionando una hoja de ruta precisa para las siguientes etapas de desarrollo.

## 2\. Metodología de Desarrollo: Fases Clave del Proyecto

El proyecto se estructura en las siguientes fases interconectadas:

• **Fase 0: Preparación y Análisis (Completada y Crítica):**  
    ◦ **Creación de Entorno de Staging y Backups:** Necesidad innegociable de un clon exacto del sitio actual para el desarrollo, junto con backups completos.  
    ◦ **Auditoría Exhaustiva:** Implicó el análisis de CSS, JavaScript, plugins activos y la estructura de páginas para identificar elementos clave a conservar, recrear u optimizar.

• **Fase 1: Desarrollo del Tema Personalizado:**  
    ◦ **Uso de un "Starter Theme":** Se comenzó con una estructura básica limpia como `_s (Underscores)` para construir el nuevo tema "foodpack-theme".  
    ◦ **Recreación de Estructura (HTML/PHP):** Edición de archivos de tema (`header.php`, `footer.php`, `index.php`, etc.) usando funciones nativas de WordPress para contenido dinámico.  
    ◦ **Aplicación y Refinamiento de Estilos (CSS):** \* Los estilos CSS extraídos del sitio antiguo sirven como "referencia, no como el producto final". La idea es "**Declarar solo lo necesario, ignorar lo obvio**". \* Se ha realizado un "proceso de refinamiento" para pasar de un "bloque de mineral en bruto a tener lingotes de oro listos para ser usados", simplificando selectores y eliminando "ruido". \* Se destaca el "uso de Variables CSS (:root)" y la "estructura y organización" del CSS como prácticas recomendadas. \* Se identifican áreas de mejora como la **refactorización de nombres de clases y selectores** (ej. `.grano-menu` a `.main-navigation`) y el ajuste de **alturas fijas por min-height y padding** para mayor flexibilidad.  
    ◦ **Reimplementación de Funcionalidades (JavaScript):** Se busca reemplazar scripts antiguos con librerías modernas y ligeras.

• **Fase 2: Integración de Contenido y WooCommerce:**  
    ◦ **Reemplazo de Elementor:** "El objetivo es eliminar Elementor." Se utilizará el editor de bloques de WordPress (Gutenberg) junto con **Advanced Custom Fields (ACF)** para la gestión de contenido, creando "Grupos de Campos" para secciones editables.  
    ◦ **Integración WooCommerce:** Personalización de plantillas de WooCommerce copiándolas a la carpeta `/woocommerce` del nuevo tema (ej. `archive-product.php`, `single-product.php`).  
    ◦ **Funcionalidad de Cotización:** Asegurar la integración del plugin YITH WooCommerce Request a Quote.

• **Fase 3: Pruebas y Control de Calidad (QA):**  
    ◦ Pruebas visuales, de responsividad, funcionales y de rendimiento (usando Google PageSpeed Insights con el objetivo de \>90 en móvil).

• **Fase 4: Migración y Puesta en Marcha (Go-Live):**  
    ◦ Planificación de horario, backup final, modo mantenimiento y migración (preferiblemente "Push to Live" del hosting o manual con herramientas como WP Migrate DB para la base de datos).

## 3\. Limpieza de JavaScript: Conservar, Recrear, Eliminar

El análisis de JavaScript reveló que el sitio está "sobrecargado de scripts". La estrategia es la siguiente:

• **Conservar (Plugins Esenciales):**  
    ◦ WooCommerce, YITH (Request a Quote / Wishlist), Contact Form 7\.

• **Recrear (Funcionalidades del Tema):** Se reemplazan los scripts antiguos por soluciones modernas para mayor rendimiento.  
    ◦ **Sliders/Carruseles:** Reemplazar `slick.min.js` con **SwiperJS**.  
    ◦ **Lightbox/Popups:** Reemplazar `jquery.magnific-popup.min.js` con **Fancybox**.  
    ◦ **Animaciones al Scroll:** Reemplazar `animate.css` con **Intersection Observer API** (sin librería externa).  
    ◦ **Countdown:** Usar JavaScript puro o una librería muy ligera.

• **Eliminar (Mayor Ahorro de Velocidad):**  
    ◦ **Elementor:** Todo el JavaScript relacionado con Elementor desaparecerá. Esta es el proceso más complejo pero también el que nos otorgará mayores ganancias en rendimiento.  
    ◦ **Scripts del Tema "Grano**" (ej. `theme.js`).  
    ◦ **Plugin de Popups** (`ays-popup-box`).  
    ◦ **Ultimate Member:** Se plantea como un punto crucial de decisión. Si solo se usa para proteger "Acceso SAP" y no para login público, debería **eliminarse**.

• **Gestión de Scripts de Terceros (Tracking):** Agrupar y añadir en `functions.php` usando `wp_head` y `wp_footer` con atributos `async` o `defer`.

## 4\. Depuración y Optimización de Plugins: Análisis Final

La auditoría de plugins ha permitido una clasificación clara:

• **Plugins Esenciales (Para CONSERVAR):**  
    ◦ WooCommerce, YITH (Request a Quote, Compare, Wishlist), FiboSearch \- AJAX Search, Contact Form 7, Akismet Anti-spam, Plugins de utilidad de Lof Marketing (CSV Metadata Import, WooCommerce Bulk Attribute Deleter, WooCommerce Bulk Delete by SKU), Loco Translate, Simple 301 Redirects, SVG Support, WPS Hide Login.  
    ◦ *Nota:* All-in-One WP Migration y Under Construction son útiles durante el desarrollo, pero serán desactivados en producción.

• **Plugins para OPTIMIZAR o REEMPLAZAR:**  
    ◦ **Ultimate Member y Members:** “Eliminar”. Reemplazar por código personalizado (`page-accesosap.php` con `is_user_logged_in()`) o un plugin ultra-ligero como **Content Control**. "Es una de las mayores ganancias de rendimiento que obtendremos"  
    ◦ **Facebook for WooCommerce y Google for WooCommerce/Analytics:** "Optimizar". Mover scripts de seguimiento a `functions.php`.  
    ◦ **LOF Underbar:** "Reemplazar". Codificar directamente en `footer.php`.  
    ◦ **WPCode Lite:** "Eliminar". El código se integrará profesionalmente en `functions.php`.

• **Plugins para ELIMINAR:**  
    ◦ **Elementor:** Objetivo principal de la migración.  
    ◦ **Grano Core:** Funcionalidades del tema antiguo.  
    ◦ **Kirki Customizer Framework:** Librería del tema antiguo.  
    ◦ **Popup Box:** Funcionalidad recreada con JavaScript moderno.  
    ◦ **WPForms Lite:** Redundante con Contact Form 7\.  
    ◦ **CMB2:** Reemplazado por **Advanced Custom Fields (ACF)**.

## 5\. Estructura de Plantillas del Nuevo Tema

Se ha definido una arquitectura clara de archivos de plantilla (`.php`) para el control total del diseño:

• **Plantillas Principales:**  
    ◦ `front-page.php`: Página de inicio modular.  
    ◦ `page.php`: Páginas generales (Nosotros, Asesoría, Contacto).  
    ◦ `page-accesosap.php`: Para la página de acceso restringido.

• **Plantillas de WooCommerce (en carpeta /woocommerce):**  
    ◦ `archive-product.php`: Página de tienda/productos.  
    ◦ `single-product.php`: Ficha de producto individual.  
    ◦ `cart/cart.php`: Página de "Carrito Cotizador".  
    ◦ `myaccount/my-account.php`: Página "Mi Cuenta".  
    ◦ *Nota:* Se necesitará estilizar Wishlist y Compare.

• **Plantillas de Blog:**  
    ◦ `index.php` (o `home.php`): Listado de entradas del Blog.  
    ◦ `single.php`: Entrada de blog individual.

