import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

const teamSlider = () => {
  document
    .querySelectorAll('.team-swiper')
    .forEach((container) => {
      new Swiper(
        container.querySelector('.team-swiper-container'),
        {
          modules: [Navigation, Pagination],
          speed: 400,
          spaceBetween: 100,
          pagination: {
            el: '.team-swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.team-swiper-button-next',
            prevEl: '.team-swiper-button-prev',
          },
        }
      );
    });
};

teamSlider();

export default teamSlider;
