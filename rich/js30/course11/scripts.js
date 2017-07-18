//Get on Elcments
const player = document.querySelector('.player');
const video = player.querySelector('.viewer');
const progress = player.querySelector('.progress');
const progressBar = player.querySelector('.progress__filled');
const toggle = player.querySelector('.toggle');
const skipButtons = player.querySelectorAll('[data-skip]');
const ranges = player.querySelectorAll('.player__slider');
const fullButton = player.querySelector('[data-full]');

//Build function

function togglePlay(){
  const method = video.paused ? 'play' : 'pause';
  video[method]();
}

function updateButton(){
  const icon = this.paused ? '►' : '❚❚';

  toggle.textContent = icon;

}
function skip(){
  console.log(this.dataset);
  video.currentTime += parseFloat(this.dataset.skip);
  // console.log(video.currentTime);
}

function handleRangeUpdate(){
  video[this.name] = this.value;
  // console.log(this.name);
  // console.log(this.value);
}

function handleProgress(){
  const percent = (video.currentTime / video.duration) * 100;
  progressBar.style.flexBasis = `${percent}%`;
}

function scrub(e){
  const scrubTime = (e.offsetX / progress.offsetWidth) * video.duration;
  video.currentTime = scrubTime;
  // console.log(e);
}
 // video.webkitEnterFullScreen()
function full(){
  video.webkitRequestFullScreen();
}

//addEventListener
video.addEventListener('click', togglePlay);
video.addEventListener('play', updateButton);
video.addEventListener('pause', updateButton);
video.addEventListener('timeupdate', handleProgress);

fullButton.addEventListener('click', full);

let mousedown = false;
progress.addEventListener('click', scrub);
progress.addEventListener('mousemove', (e) => mousedown && scrub(e));
progress.addEventListener('mousedown', () => mousedown = true);
progress.addEventListener('mouseup', () => mousedown = false);


toggle.addEventListener('click', togglePlay);

skipButtons.forEach(button => button.addEventListener('click', skip));

ranges.forEach(range => range.addEventListener('change', handleRangeUpdate));
ranges.forEach(range => range.addEventListener('mousemove', handleRangeUpdate));
