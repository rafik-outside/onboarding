class FooterAccordion {
  constructor() {
    this.init();
  }
  init() {
    const accordionsContainer =
      document.querySelectorAll('.js-accordion');
    if (accordionsContainer.length == 0) return;

    accordionsContainer.forEach((container) => {
      const accordions =
        container.querySelectorAll('.accordion');

      accordions.forEach((accordion) => {
        const header = accordion.querySelector(
          '.accordion__title'
        );

        if (!header) return;
        header.addEventListener('click', (e) => {
          if (window.innerWidth >= 1099.98) return;
          e.preventDefault();
          let parentEl = header.closest('.accordion');

          if (parentEl.classList.contains('is-open')) {
            closeAccordion(parentEl);
            return;
          }
          closeAllAccordion(accordions);
          parentEl.classList.add('is-open');
        });
      });
    });

    const closeAllAccordion = (accordions) => {
      accordions.forEach((accordion) => {
        accordion.classList.remove('is-open');
      });
    };

    const closeAccordion = (accordion) => {
      accordion.classList.remove('is-open');
    };
  }
}
export default FooterAccordion;
