import { debounce } from '@scripts/utilities/debounce';
import { throttle } from '../utilities/throttle';

const header = () => {
  let toggle_buttons = document.querySelectorAll(
    'header .header-toggle-js'
  );
  if (toggle_buttons.length == 0) {
    return;
  }
  toggle_buttons.forEach((button) => {
    const toogleMenuEvent = debounce(() => {
      adjust_sidebar_height();
      button.classList.toggle('open');
      const header_menu = button.closest('header');
      if (!header_menu.length == 0) {
        return;
      }
      header_menu.classList.toggle('is-menu-open');
      document.body.classList.toggle('overflow-hidden');
    }, 200);
    button.addEventListener('click', toogleMenuEvent);
  });
};

const adjust_sidebar_height = () => {
  let header = document.querySelector('#header');

  if (!header) {
    return;
  }
  let rect = header.getBoundingClientRect().bottom + 'px';
  document.documentElement.style.setProperty(
    '--header-height',
    rect
  );
};

const throttledAdjustSidebarHeight = throttle(
  adjust_sidebar_height,
  100
);

addEventListener('resize', throttledAdjustSidebarHeight);

export default header;
