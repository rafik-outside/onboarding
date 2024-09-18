class FooterAccordion {
  constructor() {
    this.init();
  }
  init() {
    const accordionsContainer = document.querySelectorAll('.js-accordion');
    if (!accordionsContainer.length) return;

    accordionsContainer.forEach((container) => {
      const accordions = container.querySelectorAll('.accordion');
      accordions.forEach((accordion) => {
        const header = accordion.querySelector('.accordion__title');

        if (!header) return;
        header.addEventListener('click', (e) => {
          if (window.innerWidth >= 1099.98) return;
          e.preventDefault();
          let parentEl = header.closest('.accordion');

          if (parentEl.classList.contains('is-open')) {
            this.closeAccordion(parentEl);
            return;
          }
          this.closeAllAccordion(accordions);
          parentEl.classList.add('is-open');
        });
      });
    });
  }
  closeAllAccordion(accordions) {
    accordions.forEach((accordion) => {
      accordion.classList.remove('is-open');
    });
  }
  closeAccordion(accordion) {
    accordion.classList.remove('is-open');
  }
}
export default FooterAccordion;
