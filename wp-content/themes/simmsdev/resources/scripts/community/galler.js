import { Carousel, Fancybox } from '@fancyapps/ui/';
import '@fancyapps/ui/dist/carousel/carousel.css';
import '@fancyapps/ui/dist/fancybox/fancybox.css';

import { Thumbs } from '@fancyapps/ui/dist/carousel/carousel.thumbs.esm.js';
import '@fancyapps/ui/dist/carousel/carousel.thumbs.css';

export const initCommunityGallery = async () => {
  new Carousel(
    document.getElementById('primaryPageGallery'),
    {
      infinite: false,
      Dots: false,
      Thumbs: {
        type: 'classic',
        Carousel: {
          slidesPerPage: 1,
          Navigation: true,
          center: true,
          fill: true,
          dragFree: true,
        },
      },
    },
    { Thumbs },
  );

  Fancybox.bind('[data-fancybox="gallery"]', {
    idle: false,
    compact: false,
    dragToClose: false,
    animated: false,
    showClass: 'f-fadeSlowIn',
    hideClass: false,

    Carousel: {
      infinite: false,
    },

    Images: {
      zoom: false,
      Panzoom: {
        maxScale: 1.5,
        touch: true, // Enables pinch-to-zoom on touch devices
      },
    },

    Toolbar: {
      absolute: true,
      display: {
        left: ['infobar'],
        middle: [
          'zoomIn',
          'zoomOut',
          'toggle1to1',
          'rotateCCW',
          'rotateCW',
          'flipX',
          'flipY',
        ],
        right: ['slideshow', 'thumbs', 'close'],
      },
    },

    Thumbs: {
      type: 'classic',
      Carousel: {
        axis: 'x',
        slidesPerPage: 1,
        Navigation: true,
        center: true,
        fill: true,
        dragFree: true,

        breakpoints: {
          '(min-width: 640px)': {
            axis: 'y',
          },
        },
      },
    },
  });
};
