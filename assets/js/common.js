// Nav toggle
let navToggle = document.getElementById('nav-toggle');
navToggle.addEventListener("click", ToggleNav);

function ToggleNav(){
	let header = document.getElementById('masthead');
	header.classList.toggle('open');
}

// Parralx scolling splash backgrounds
let splashBackground = document.getElementById("splash-background");
window.addEventListener("scroll", BackgroundScroll);

function BackgroundScroll(){
	let distance  = window.scrollY;
	let scrollSpeed = 3;
	let yPos = distance / scrollSpeed;
	let coords = '0%' + -yPos / 10 + 'px'

	splashBackground.style.backgroundPosition  = coords;
}

// Preload screen
window.onload = (event) => {
	console.log("page is fully loaded");
	let overlay = document.getElementById('preload');
	overlay.classList.add('hidden');
  };

// menu hide/reveal on scroll
let prevScroll = window.scrollY;
window.addEventListener('scroll', MenuHideOnScroll);

function MenuHideOnScroll(){
  let currentSroll = window.scrollY;

  if (prevScroll > currentSroll) {
	document.querySelector('.site-header').classList.remove('hide-menu');
    document.querySelector('.site-header').classList.add('show-menu');
  } else {
    document.querySelector('.site-header').classList.remove('show-menu');
	document.querySelector('.site-header').classList.add('hide-menu');
  }
  prevScroll = currentSroll;
}

// Scroll on click
let scrollClick = document.getElementById('scroll-link');
scrollClick.addEventListener('click', ScrollTo);

function ScrollTo(){

}