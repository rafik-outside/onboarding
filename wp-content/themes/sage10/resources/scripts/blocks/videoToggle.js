import Player from '@vimeo/player';

class ToggleVideo {
  constructor() {
    this.toggleVideo(); // Correctly reference the instance method
  }

  toggleVideo() {
    const buttons = document.querySelectorAll('.js-play-video');
    if (buttons.length === 0) return;

    buttons.forEach((button) => {
      const data_src = button.getAttribute('data-src');
      var videoContainer = button.parentElement;
      if (data_src && videoContainer) {
        const regex = /\/video\/(\d+)/;
        const videoID = data_src.match(regex);
        if (!videoID[1]) return;
        var option1 = {
          id: videoID[1],
          autoplay: 0,
          controls: 0,
          muted: 1,
        };
        var video01Player = new Player(videoContainer, option1);
        video01Player.setVolume(0);
      }
      button.addEventListener('click', () => {
        // Use arrow function to retain `this` context
        const target = button.nextElementSibling;
        if (!target) return;
        const tagName = target.tagName;
        target.classList.add('about-us__video__content');

        let player = null;

        // Create Vimeo player instance if it's an iframe
        if (tagName === 'IFRAME') {
          player = new Player(target);
          player.setVolume(0); // Set the volume to 0
        }

        // Pause or play the video
        if (target.classList.contains('video-is-playing') && tagName) {
          const videos = document.querySelectorAll('.about-us__video__content');

          this.pauseAll(videos); // Call the instance method
          const pauseButtons = document.querySelectorAll('.about-us__video__container .pause-button');
          if (pauseButtons.length == 0) return;
          this.removePauseButtonClass(pauseButtons);
        } else {
          this.playVideo(tagName, target, player); // Call the instance method
          const pauseButtons = document.querySelectorAll('.about-us__video__container .pause-button');
          button.classList.add('pause-button');
          if (pauseButtons.length == 0) {
            return;
          }
          this.removePauseButtonClass(pauseButtons);
        }
      });
    });
  }

  playVideo(tagName, target, player) {
    const videos = document.querySelectorAll('.about-us__video__content.video-is-playing');
    this.pauseAll(videos); // Ensure other videos are paused
    target.classList.add('video-is-playing');
    if (player) {
      player.play(); // Asynchronous play for Vimeo
    } else if (tagName === 'VIDEO') {
      target.play(); // HTML5 video
    }
  }

  pauseAll(videoElements) {
    videoElements.forEach((element) => {
      element.classList.remove('video-is-playing');
      if (element.tagName === 'IFRAME') {
        const player = new Player(element);
        player.pause(); // Asynchronous pause for Vimeo
      } else if (element.tagName === 'VIDEO') {
        element.pause(); // HTML5 video pause
      }
    });
  }
  removePauseButtonClass(pauseButtons) {
    if (pauseButtons) {
      pauseButtons.forEach((pause) => {
        pause.classList.remove('pause-button');
      });
    }
  }
}

export default ToggleVideo;
