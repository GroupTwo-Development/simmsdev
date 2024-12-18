import Swiper from 'swiper/bundle';
import { Navigation, Pagination, Controller } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
export const featureTestimonal = async (err) => {
  if (err) {
    console.error('Error loading dropdown select:', err);
    return;
  }

  const imageSwiper = new Swiper('.image-swiper', {
    modules: [Controller],
    slidesPerView: 1,
    loop: true,
  });

  // Initialize Swiper instances
  const testimonialSwiper = new Swiper('.testimonial-swiper', {
    modules: [Navigation, Pagination, Controller],
    slidesPerView: 1,
    loop: true,
    control: imageSwiper,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  const imageSwiperTwo = new Swiper('.image-swiper-two', {
    modules: [Controller],
    slidesPerView: 1,
    loop: true,
  });

  // Initialize Swiper instances
  const testimonialSwiperTwo = new Swiper('.testimonial-swiper-two', {
    modules: [Navigation, Pagination, Controller],
    slidesPerView: 1,
    loop: true,
    control: imageSwiper,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  const imageSwiperThree = new Swiper('.image-swiper-three', {
    modules: [Controller],
    slidesPerView: 1,
    loop: true,
  });

  // Initialize Swiper instances
  const testimonialSwiperThree = new Swiper('.testimonial-swiper-three', {
    modules: [Navigation, Pagination, Controller],
    slidesPerView: 1,
    loop: true,
    control: imageSwiper,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  testimonialSwiper.controller.control = imageSwiper;
  imageSwiper.controller.control = testimonialSwiper;

  testimonialSwiperTwo.controller.control = imageSwiperTwo;
  imageSwiperTwo.controller.control = testimonialSwiperTwo;

  testimonialSwiperThree.controller.control = imageSwiperThree;
  imageSwiperThree.controller.control = testimonialSwiperThree;
};
