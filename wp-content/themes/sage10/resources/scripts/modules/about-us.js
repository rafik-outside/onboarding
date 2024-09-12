const toggleVideo = () => {
  var buttons = document.querySelectorAll('.js-play-video');
  if (buttons.length == 0) {
    return;
  }
  buttons.forEach((button) => {
    button.addEventListener('click', function () {
      const sibling = button.nextElementSibling;
      const target = sibling && sibling.classList.contains('about-us__video__content') ? sibling : false;
      console.log(target);
      if (!target) {
        return;
      }
    });
  });
};
toggleVideo();
// export default toggleVideo();
