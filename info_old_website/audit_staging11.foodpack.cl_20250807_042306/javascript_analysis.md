# 🔍 Análisis de JavaScript - Auditoría Frontend

**Sitio analizado:** https://staging11.foodpack.cl/
**Fecha:** 2025-08-07 04:25:39
**Herramienta:** JS Extractor Python

---

## 📊 Resumen Ejecutivo

- **Scripts totales encontrados:** 123
- **Librerías JavaScript:** 7
- **Plugins de WordPress:** 5
- **Efectos/Animaciones:** 10
- **Eventos detectados:** 2

---

## 📚 Librerías JavaScript Detectadas

### jQuery
- **Versión:** 3.7.1
- **Estado:** ✅ Activa

### React
- **Versión:** 18.3.1
- **Estado:** ✅ Activa

### Moment.js
- **Versión:** 2.30.1
- **Estado:** ✅ Activa

### Lodash
- **Versión:** Desconocida
- **Estado:** ✅ Activa

### Underscore
- **Versión:** Desconocida
- **Estado:** ✅ Activa

### Elementor
- **Versión:** Desconocida
- **Estado:** ✅ Activa

### WooCommerce
- **Versión:** Desconocida
- **Estado:** ✅ Activa

---

## 🔌 Plugins de WordPress

### WooCommerce
- **Detectado en:** JavaScript
- **Patrón encontrado:** `woocommerce`
- **Evidencia:** Inline script

### Elementor
- **Detectado en:** JavaScript
- **Patrón encontrado:** `elementor`
- **Evidencia:** Inline script

### YITH
- **Detectado en:** JavaScript
- **Patrón encontrado:** `yith`
- **Evidencia:** Inline script

### Contact Form 7
- **Detectado en:** JavaScript
- **Patrón encontrado:** `contact-form-7`
- **Evidencia:** Inline script

### Akismet
- **Detectado en:** HTML
- **Patrón encontrado:** `akismet`
- **Evidencia:** HTML source

---

## ✨ Efectos y Animaciones

### Slider/Carrusel
- **Patrones encontrados:** slider, carousel, slick, swiper
- **Implementación:** Script inline, Archivo externo: slick.min.js

### Animaciones de scroll
- **Patrones encontrados:** animate

### Lightbox
- **Patrones encontrados:** lightbox, magnific
- **Implementación:** Script inline, Archivo externo: jquery.magnific-popup.min.js

### Menú móvil
- **Patrones encontrados:** mobile-menu

### Tabs/Acordeón
- **Patrones encontrados:** tabs, collapse

### Modal/Popup
- **Patrones encontrados:** modal, popup, dialog, overlay
- **Implementación:** Script inline, Archivo externo: um-modal.min.js, Archivo externo: jquery.magnific-popup.min.js, Archivo externo: ays-pb-public.js

### Lazy Loading
- **Patrones encontrados:** lazy, lazyload, defer
- **Implementación:** Script inline

### Animaciones CSS
- **Patrones encontrados:** animate.css

### Sticky/Fixed
- **Patrones encontrados:** sticky, fixed

### Countdown
- **Patrones encontrados:** countdown
- **Implementación:** Archivo externo: jquery.countdown.min.js

---

## 👆 Eventos JavaScript

- **DOMContentLoaded:** 2 eventos

---

## 📜 Scripts Detallados

### Scripts Inline (43)

**Script 1:**
- Tamaño: 96 caracteres

**Script 2:**
- Tamaño: 3392 caracteres
- Funciones: f, u, g, t, c

**Script 3:**
- Tamaño: 278 caracteres

**Script 4:**
- Tamaño: 84 caracteres

**Script 5:**
- Tamaño: 846 caracteres
- Funciones: gtag

### Scripts Externos (80)

**recaptcha__es.js**
- URL: `https://www.gstatic.com/recaptcha/releases/07cvpCr3Xe3g2ttJNUkC6W0J/recaptcha__es.js`
- Dominio: www.gstatic.com
- Local: ❌ No
- CDN: ❌ No

**js**
- URL: `https://www.googletagmanager.com/gtag/js?id=AW-16450569911&cx=c&gtm=45je5851v9168390788za200&tag_exp=101509157~103116026~103200004~103233427~104684208~104684211~105033763~105033765~105087538~105087540~105103161~105103163`
- Dominio: www.googletagmanager.com
- Local: ❌ No
- CDN: ❌ No

**909664637675831**
- URL: `https://connect.facebook.net/signals/config/909664637675831?v=2.9.222&r=stable&domain=staging11.foodpack.cl&hme=2e9ee56babe122798b967566f46100108daa710154b06378259c746cb66ac325&ex_m=83%2C143%2C124%2C18%2C117%2C58%2C40%2C118%2C64%2C57%2C131%2C72%2C13%2C82%2C26%2C112%2C103%2C62%2C65%2C111%2C128%2C91%2C133%2C7%2C3%2C4%2C6%2C5%2C2%2C73%2C81%2C134%2C208%2C155%2C52%2C213%2C210%2C211%2C45%2C170%2C25%2C61%2C217%2C216%2C158%2C28%2C51%2C8%2C54%2C77%2C78%2C79%2C84%2C107%2C27%2C24%2C110%2C106%2C105%2C125%2C63%2C127%2C126%2C41%2C108%2C50%2C100%2C12%2C130%2C37%2C199%2C201%2C165%2C21%2C22%2C23%2C15%2C16%2C36%2C33%2C34%2C68%2C74%2C76%2C89%2C116%2C119%2C38%2C90%2C19%2C17%2C94%2C59%2C31%2C121%2C120%2C122%2C113%2C20%2C30%2C49%2C88%2C129%2C29%2C180%2C151%2C86%2C109%2C67%2C98%2C44%2C39%2C96%2C97%2C102%2C48%2C14%2C104%2C95%2C55%2C43%2C46%2C0%2C80%2C132%2C1%2C101%2C11%2C99%2C257%2C197%2C141%2C183%2C176%2C9%2C47%2C75%2C53%2C123%2C56%2C93%2C71%2C70%2C42%2C114%2C69%2C66%2C60%2C92%2C85%2C35%2C115%2C32%2C87%2C10%2C135`
- Dominio: connect.facebook.net
- Local: ❌ No
- CDN: ❌ No

**fbevents.js**
- URL: `https://connect.facebook.net/en_US/fbevents.js`
- Dominio: connect.facebook.net
- Local: ❌ No
- CDN: ❌ No

**jquery.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/jquery/jquery.min.js?ver=3.7.1`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**jquery-migrate.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**ays-pb-public.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ays-popup-box/public/js/ays-pb-public.js?ver=5.3.1`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**jquery.blockUI.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.9.3`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**add-to-cart.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.9.3`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**js.cookie.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.9.3`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**woocommerce.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.9.3`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**underscore.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/underscore.min.js?ver=1.13.7`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**wp-util.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/wp-util.min.js?ver=6.8.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**add-to-cart-variation.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=9.9.3`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-gdpr.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/um-gdpr.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**analytics.js**
- URL: `https://analytics.ahrefs.com/analytics.js`
- Dominio: analytics.ahrefs.com
- Local: ❌ No
- CDN: ❌ No

**wp-emoji-release.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/wp-emoji-release.min.js?ver=6.8.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

****
- URL: `https://googleads.g.doubleclick.net/pagead/viewthroughconversion/16450569911/?random=1754555129533&cv=11&fst=1754555129533&bg=ffffff&guid=ON&async=1&en=page_view&gtm=45be5851v9194101035za200zb9168390788zd9168390788xec&gcd=13l3l3l3l5l1&dma=0&tag_exp=101509157~103116026~103200004~103233427~104527907~104528501~104684208~104684211~104948813~105087538~105087540~105103161~105103163~105113532&u_w=800&u_h=600&url=https%3A%2F%2Fstaging11.foodpack.cl%2F&hn=www.googleadservices.com&frm=0&tiba=FoodPack&did=dOGY3NW&gdid=dOGY3NW&npa=0&auid=1713626033.1754555130&uaa=&uab=&uafvl=&uamb=0&uam=&uap=Windows&uapv=&uaw=0&fledge=1&data=event%3Dpage_view&rfmt=3&fmt=4`
- Dominio: googleads.g.doubleclick.net
- Local: ❌ No
- CDN: ❌ No

**js**
- URL: `https://www.googletagmanager.com/gtag/js?id=G-Y4PPK8GFJV`
- Dominio: www.googletagmanager.com
- Local: ❌ No
- CDN: ❌ No

**hooks.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**i18n.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**main.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce-google-analytics-integration/assets/js/build/main.js?ver=50c6d17d67ef40d67991`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**lodash.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/vendor/lodash.min.js?ver=4.17.21`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**wp-polyfill.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**moment.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/vendor/moment.min.js?ver=2.30.1`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: Moment.js

**deprecated.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/deprecated.min.js?ver=e1f84915c5e8ae38964c`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**date.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/date.min.js?ver=85ff222add187a4e358f`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**index.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/yith-woocommerce-compare/plugin-fw/dist/lapilli-ui/date/index.js?ver=a688abdf8f9c4a18e904`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**react.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/vendor/react.min.js?ver=18.3.1.1`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**index.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/yith-woocommerce-compare/plugin-fw/dist/lapilli-ui/styles/index.js?ver=05a5b5e59191f74ac904`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**react-dom.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.3.1.1`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**index.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/yith-woocommerce-compare/plugin-fw/dist/lapilli-ui/components/index.js?ver=fe5275fad0fd47db7c63`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**url.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/url.min.js?ver=c2964167dfe2477c14ea`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**api-fetch.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/dist/api-fetch.min.js?ver=3623a576c78df404ff20`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**index.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/yith-woocommerce-wishlist/assets/js/dist/components/add-to-wishlist/index.js?ver=74f63692d5dd73780ee4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**add-to-wishlist-gutenberg.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/yith-woocommerce-wishlist/assets/js/add-to-wishlist-gutenberg.min.js?ver=4.5.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**jquery.selectBox.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**jquery.prettyPhoto.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**jquery.yith-wcwl.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=4.5.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**index.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.6`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**index.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.0.6`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**frontend.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/yith-woocommerce-request-a-quote/assets/js/frontend.min.js?ver=2.40.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**wishlist.js**
- URL: `https://staging11.foodpack.cl/wp-content/themes/grano/assets/js/wishlist.js?ver=1.0.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**sourcebuster.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.9.3`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**order-attribution.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.9.3`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**api.js**
- URL: `https://www.google.com/recaptcha/api.js?render=6LdeuiEpAAAAAPeuDAXFgn-ffrfgV4P6OF3r_N2j&ver=3.0`
- Dominio: www.google.com
- Local: ❌ No
- CDN: ❌ No

**index.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=6.0.6`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**webpack.runtime.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.29.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: Elementor

**frontend-modules.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.29.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: Elementor

**core.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**frontend.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.29.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: Elementor

**jquery-numerator.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**slick.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/themes/grano/assets/js/vendor/slick.min.js?ver=1.5.9`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**jquery.countdown.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/themes/grano/assets/js/vendor/jquery.countdown.min.js?ver=2.2.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**jquery.magnific-popup.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/themes/grano/assets/js/vendor/jquery.magnific-popup.min.js?ver=1.1.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**imagesloaded.min.js**
- URL: `https://staging11.foodpack.cl/wp-includes/js/imagesloaded.min.js?ver=5.0.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**theme.js**
- URL: `https://staging11.foodpack.cl/wp-content/themes/grano/assets/js/theme.js?ver=1.0.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**tipsy.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/tipsy/tipsy.min.js?ver=1.0.0a`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-confirm.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/um-confirm/um-confirm.min.js?ver=1.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**picker.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/pickadate/picker.min.js?ver=3.6.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**picker.date.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/pickadate/picker.date.min.js?ver=3.6.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**picker.time.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/pickadate/picker.time.min.js?ver=3.6.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**es_ES.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/pickadate/translations/es_ES.min.js?ver=3.6.2`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**common.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/common.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**cropper.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/cropper/cropper.min.js?ver=1.6.1`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**common-frontend.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/common-frontend.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-modal.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/um-modal.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**jquery-form.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/jquery-form/jquery-form.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No
- Librería: jQuery

**fileupload.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/fileupload/fileupload.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-functions.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/um-functions.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-responsive.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/um-responsive.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-conditional.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/um-conditional.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**select2.full.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/select2/select2.full.min.js?ver=4.0.13`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**es.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/select2/i18n/es.js?ver=4.0.13`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-raty.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/libs/raty/um-raty.min.js?ver=2.6.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-scripts.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/um-scripts.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-profile.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/um-profile.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**um-account.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ultimate-member/assets/js/um-account.min.js?ver=2.10.4`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**search.min.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/ajax-search-for-woocommerce/assets/js/search.min.js?ver=1.30.0`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

**gtag-events.js**
- URL: `https://staging11.foodpack.cl/wp-content/plugins/google-listings-and-ads/js/build/gtag-events.js?ver=5a4e71ac555fd7fba253`
- Dominio: staging11.foodpack.cl
- Local: ✅ Sí
- CDN: ❌ No

---

## 🎯 Recomendaciones para Migración

### Scripts Críticos a Conservar:
- **jQuery:** Esencial para funcionalidad del sitio
- **WooCommerce:** Esencial para funcionalidad del sitio

### Efectos a Recrear:
- **Slider/Carrusel:** Implementar en el nuevo tema
- **Animaciones de scroll:** Implementar en el nuevo tema

### Plugins Esenciales:
- **WooCommerce:** Mantener activo
- **Contact Form 7:** Mantener activo

### Scripts a Eliminar/Reemplazar:
- **Elementor:** Eliminar tras migración


---

## 📈 Estadísticas Técnicas

- **Scripts inline:** 43
- **Scripts externos:** 80
- **Scripts locales:** 72
- **Scripts CDN:** 0
- **Tamaño total estimado:** 36.0 KB

---

*Reporte generado automáticamente por JS Extractor*
