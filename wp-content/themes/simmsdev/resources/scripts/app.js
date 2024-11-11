import domReady from '@roots/sage/client/dom-ready';
import { mobileToggle } from './common/mobileToggle';
import { bannerSlider } from './homepage/bannerSlider';
import { initFooterContent } from './community/footerContent';
import { initCommunityGallery } from './community/galler.js';
import { initScrollToSection } from './common/sectionScroll.js';
import { initVideoPlayer } from './common/videoPlayer.js';
import { loadMore } from './common/loadMore.js';
import { initLocationMap } from './community/location.js';
import '@fortawesome/fontawesome-free/js/all.js';

import $ from 'jquery';
import Alpine from 'alpinejs';

// Optional: Attach jQuery to the window object if you want to use `$` globally
window.$ = $;
window.jQuery = $;

window.Alpine = Alpine;

// Attach initScrollToSection to window for Alpine.js
window.initScrollToSection = initScrollToSection;

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
  initVideoPlayer();
  loadMore();
  initLocationMap();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
