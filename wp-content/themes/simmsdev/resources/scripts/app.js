import domReady from '@roots/sage/client/dom-ready';
import { mobileToggle } from './common/mobileToggle';
import { bannerSlider } from './homepage/bannerSlider';
import { initFooterContent } from './community/footerContent';
import { initCommunityGallery } from './community/galler.js';
import '@fortawesome/fontawesome-free/js/all.js';

import $ from 'jquery';

// Optional: Attach jQuery to the window object if you want to use `$` globally
window.$ = $;
window.jQuery = $;

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', () => {
  Alpine.start();
});

/**
 * Application entrypoint
 */
domReady(async () => {
  mobileToggle();
  bannerSlider();
  initFooterContent();
  initCommunityGallery();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
