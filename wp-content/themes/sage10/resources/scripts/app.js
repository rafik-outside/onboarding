import domReady from '@roots/sage/client/dom-ready';
import header from './global/header';
import ToggleVideo from './blocks/videoToggle';
import FooterAccordion from './modules/footer-accordion';

// import 'bootstrap/js/src/offcanvas.js'

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  header();
  new ToggleVideo();
  new FooterAccordion();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
