import '@fancyapps/ui/dist/carousel/carousel.css';
import '@fancyapps/ui/dist/fancybox/fancybox.css';
import '@fancyapps/ui/dist/carousel/carousel.thumbs.css';

import { Fancybox } from '@fancyapps/ui';

export const initVideoPlayer = () => {
  Fancybox.bind('[data-fancybox]', {
    // Custom options
    // Example options: customize transition, overlay color, etc.
    Toolbar: true,
    Thumbs: {
      autoStart: true,
    },
    Video: {
      autoplay: true,
    },
  });

  Fancybox.bind('[data-fancybox="gallery-qmi-sitemap"]', {
    // Custom options
    // Example options: customize transition, overlay color, etc.
    Toolbar: true,
    Thumbs: {
      autoStart: true,
    },
    Video: {
      autoplay: true,
    },
  });

  Fancybox.bind('[data-fancybox="elevations"]', {
    Thumbs: {
      type: 'modern',
    },
  });
};
