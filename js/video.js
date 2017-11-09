

var video = videojs('odijmond-video');
var overlay = document.getElementById('videooverlay');
var map = document.getElementById('footerkaart');
var playbutton = document.getElementById('overlayplay');
var hint = document.getElementById('overlayhint');
var back = document.getElementById('overlayback');

var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

videojs('odijmond-video').ready(function() {
	if(iOS) {
		overlay.style.display = "none";
		hint.style.opacity = "0";
		playbutton.style.opacity = "0";
	}
});

video.on('ended', function() {
	overlay.style.opacity = "1";
	map.style.display = "block";
	hint.style.opacity = "1";
	playbutton.style.opacity = "1";
	back.style.opacity = "1";
	playbutton.innerHTML = "Speel nogmaals >>";
	overlay.onclick = function() {
		return false;
	}
});

video.on("pause", function () {
	overlay.style.opacity = "1";
	map.style.display = "block";
	hint.style.opacity = "1";1
	playbutton.style.opacity = "1";
	back.style.opacity = "1";
	playbutton.innerHTML = "Speel verder >>";
	overlay.onclick = function() {
		return false;
	}
});

video.on("play", function () {
	overlay.style.display = "block";
	overlay.style.opacity = "0";
	map.style.display = "none";
	hint.style.opacity = "0";
	back.style.opacity = "0";
	playbutton.style.opacity = "1";
	playbutton.innerHTML = "ga naar opties";
	overlay.onclick = function() {
		togglePause();
	}
});

overlay.onclick = function() {
	// togglePause();
}

playbutton.onclick = function() {
	togglePause();
}


// if (visited) {
// 	document.getElementById("videooverlay").style.opacity = "1";
// 	document.getElementsByClassName("vjs-big-play-button")[0].style.display = "none";
// };

// overlay.onclick = function(){
// 	alert('hey');
// 	togglePause();
// };
// videojs.options.children.loadingSpinner = false;


 function togglePause(){
  if (video.paused()) {
		document.getElementById("videooverlay").style.opacity = "0";
    video.play();
  }
  else {
    video.pause();
  }
}

// video.on('ended', function() {
// 	video.currentTime(23);
// 	video.play();
// });

// video.LoadingSpinner(false);
// video.loop(true);
// video.on('timeupdate', function () {
// 	if ( this.currentTime() < 15 && this.currentTime() > 0) {
// 		document.getElementById("videooverlay").style.opacity = "0";
// 	}
// 	if ( this.currentTime() >= 40.12) {
// 		video.currentTime(27.1);
// 	}
// 	if ( this.currentTime() >= 15 ){
// 		document.getElementById("videooverlay").style.opacity = "1";
// 		// overlay.style.display = "block";
// 	};
// });



// video.ready(function() {
// 	setTimeout(() => {
// 		this.play();
// 	}, 3000);
// });