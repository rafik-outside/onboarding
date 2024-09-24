import { debounce } from '@scripts/utilities/debounce';
import Player from '@vimeo/player';

class ToggleVideo {
  constructor() {
    this.init(); // Correctly reference the instance method
  }

  init() {
    const buttons = document.querySelectorAll(
      '.js-play-video'
    );

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
        new Player(videoContainer, option1);
      }

      let videoClickEvent = debounce(() => {
        const target = button.nextElementSibling;
        if (!target) return;
        const tagName = target.tagName;
        target.classList.add('about-us__video--content');

        let player = null;

        // Create Vimeo player instance if it's an iframe
        if (tagName === 'IFRAME') {
          player = new Player(target);
        }
        // Pause or play the video
        if (
          target.classList.contains('video-is-playing') &&
          tagName
        ) {
          const videos = document.querySelectorAll(
            '.about-us__video--content'
          );

          pauseAll(videos); // Call the instance method
          const pauseButtons = document.querySelectorAll(
            '.about-us__video--container .pause-button'
          );
          if (pauseButtons.length == 0) return;
          removePauseButtonClass(pauseButtons);
        } else {
          playVideo(tagName, target, player); // Call the instance method
          const pauseButtons = document.querySelectorAll(
            '.about-us__video--container .pause-button'
          );
          button.classList.add('pause-button');
          if (pauseButtons.length == 0) {
            return;
          }
          removePauseButtonClass(pauseButtons);
        }
      }, 200);
      button.addEventListener('click', videoClickEvent);
    });

    const playVideo = (tagName, target, player) => {
      const videos = document.querySelectorAll(
        '.about-us__video--content.video-is-playing'
      );
      pauseAll(videos); // Ensure other videos are paused
      target.classList.add('video-is-playing');
      if (player) {
        player.play(); // Asynchronous play for Vimeo
      } else if (tagName === 'VIDEO') {
        target.play(); // HTML5 video
      }
    };

    const pauseAll = (videoElements) => {
      videoElements.forEach((video) => {
        video.classList.remove('video-is-playing');
        if (video.tagName === 'IFRAME') {
          const player = new Player(video);
          player.pause(); // Asynchronous pause for Vimeo
        } else if (video.tagName === 'VIDEO') {
          video.pause(); // HTML5 video pause
        }
      });
    };
    const removePauseButtonClass = (pauseButtons) => {
      if (pauseButtons) {
        pauseButtons.forEach((pause) => {
          pause.classList.remove('pause-button');
        });
      }
    };
  }
}

export default ToggleVideo;

new ToggleVideo();
