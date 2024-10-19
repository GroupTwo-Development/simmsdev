import Swiper from 'swiper/bundle';
import { Navigation, Pagination, Scrollbar } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export const bannerSlider = async (err) => {
  if (err) {
    console.error(err);
    return;
  }

  const BannerSlider = new Swiper('.bannerSlider', {
    modules: [Navigation, Pagination, Scrollbar],
    loop: true,

    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
};