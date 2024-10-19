import domReady from '@roots/sage/client/dom-ready';
import { mobileToggle } from './common/mobileToggle';
import { bannerSlider } from './homepage/bannerSlider';
import '@fortawesome/fontawesome-free/js/all.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
/**
 * Application entrypoint
 */
domReady(async () => {
  mobileToggle();
  bannerSlider();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
