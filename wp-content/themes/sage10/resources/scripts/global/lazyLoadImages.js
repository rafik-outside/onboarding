export function lazyLoadImage() {
  const lazyImages = document.querySelectorAll('.js-img-lazy');
  if (lazyImages.length == 0) {
    return;
  }

  //function responsible for loading image
  function loadImage(image) {
    image.src = image.dataset.src;
    if (image.complete) {
      image.classList.add('js-img-loaded');
      image.removeAttribute('data-src');
    } else {
      image.addEventListener('load', () => {
        image.classList.add('js-img-loaded');
        image.removeAttribute('data-src');
      });
    }
  }

  function checkIntersection(entries, observer) {
    entries.forEach((entry) => {
      let lazyImageWrapper = entry.target;
      if (entry.isIntersecting) {
        loadImage(lazyImageWrapper);
        observer.unobserve(lazyImageWrapper);
      }
    });
  }

  if ('IntersectionObserver' in window) {
    let options = {
      root: null,
      rootMargin: '200px',
      threshold: 0.5,
    };

    let lazyImageObserver = new IntersectionObserver(checkIntersection, options);

    lazyImages.forEach((lazyImage) => {
      lazyImageObserver.observe(lazyImage);
    });
  } else {
    lazyImages.forEach((lazyImage) => {
      loadImage(lazyImage);
    });
  }
}
