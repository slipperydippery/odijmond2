<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>odijmond</title>
<meta name="author" content="Maarten de Jager">
<meta name="description" content="odijmond test page">
<link href="https://vjs.zencdn.net/5.17.0/video-js.css" rel="stylesheet">
<link href="css/normalize.css" rel="stylesheet">
<link href="css/app.css" rel="stylesheet">
<link rel="shortcut icon" href="https://quest.app/img/favicon.png">

</head>
<body>

<div class="vjs--container content">
	<video 
	    preload="auto" 
	    id="odijmond-video"
	    class="video-js vjs-big-play-centered vjs-16-9" 
	    poster="img/rodenburghoeve_poster.jpg"
	    autoplay
	    playsinline
	    data-setup="{}"
	>
	    <source src="video/rodenburghoeve.mp4" type="video/mp4">
	    <p class="vjs-no-js">
	        To view this video please enable JavaScript, and consider upgrading to a web browser that
	        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
	    </p>
	</video>
	<div class="videooverlay" id="videooverlay">
		<?php
			include 'partials/kaart.php';
		?>
	</div>
	<div class="overlayback" id="overlayback" onClick="window.location='https://www.odijmond.nl/over-ons/';">
		<< Terug naar website
	</div>
	<div class="overlayhint" id="overlayhint">
		Klik op een tekstballon om een andere video af te spelen
	</div>
	<div class="overlayplay" id="overlayplay">
		Speel verder >>
	</div>
</div>
    <script src="https://vjs.zencdn.net/5.17.0/video.js"></script>
    <script src="js/video.js"></script>
</body>
</html>
