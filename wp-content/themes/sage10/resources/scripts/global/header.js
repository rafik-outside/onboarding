const header = () => {
  document.addEventListener('DOMContentLoaded', function () {
    var toggle_buttons = document.querySelectorAll('header .header-toggle-js');
    if (toggle_buttons.length == 0) {
      return;
    }
    toggle_buttons.forEach((button) => {
      button.addEventListener('click', function () {
        adjust_sidebar_height();
        this.classList.toggle('open');
        const header_menu = document.querySelector('header');
        if (!header_menu.length == 0) {
          return;
        }
        header_menu.classList.toggle('is-menu-open');
      });
    });
  });
};
window.addEventListener('scroll', function () {
  adjust_sidebar_height();
});
const adjust_sidebar_height = () => {
  var header__nav__mobile = document.querySelector('.header__nav__mobile');
  if (header__nav__mobile) {
    let header = document.querySelector('#header');
    if (header) {
      let rect = header.getBoundingClientRect();
      var bottom = rect.bottom;
      header__nav__mobile.style.height = 'calc( 100vh - ' + bottom + 'px )';
      header__nav__mobile.style.top = bottom + 2 + 'px';
    }
  }
};
export default header;
