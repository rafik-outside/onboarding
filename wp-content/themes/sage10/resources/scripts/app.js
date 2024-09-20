import domReady from '@roots/sage/client/dom-ready';
import header from './global/header';
import FooterAccordion from './global/footer-accordion';
// import 'bootstrap/js/src/offcanvas.js'

/**
 * Application entrypoint
 */
domReady(async () => {
  header();
  new FooterAccordion();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
