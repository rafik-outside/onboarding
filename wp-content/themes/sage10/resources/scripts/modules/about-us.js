import Player from '@vimeo/player';

const toggleVideo = () => {
  var buttons = document.querySelectorAll('.js-play-video');
  if (buttons.length == 0) {
    return;
  }
  buttons.forEach((button) => {
    var is_playing = false;

    button.addEventListener('click', function () {
      const sibling = button.nextElementSibling;
      const target = sibling && sibling.classList.contains('about-us__video__content') ? sibling : false;
      if (!target) {
        return;
      }
      var tagName = target.tagName;
      var player = false;

      if (tagName == 'IFRAME') {
        player = new Player(target);
      }
      if (is_playing && tagName) {
        is_playing = pauseVideo(tagName, target, player);
      } else {
        is_playing = playVideo(tagName, target, player);
      }
    });
  });
};
const playVideo = (tagName, target, player) => {
  if (player) {
    player.play();
    return true;
  }
  if (tagName == 'VIDEO') {
    target.play();
    return true;
  }
  return false;
};
const pauseVideo = (tagName, target, player) => {
  if (tagName == 'IFRAME') {
    player.pause();
    return false;
  }
  if (tagName == 'VIDEO') {
    target.pause();
    return false;
  }
  return false;
};

toggleVideo();
// export default toggleVideo();
