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

</head>
<body>

<div class="vjs--container content">
	<div class="videooverlay videooverlay--intro" id="videooverlay">
		<?php
			include 'partials/kaart.php';
		?>
	</div>
	<div class="overlayhint" id="overlayhint">
		Klik op een tekstballon om een andere video af te spelen
	</div>
	<div class="overlayback" id="overlayback" onClick="window.location='https://www.odijmond.nl/over-ons/maak-kennis/';">
		<< Terug naar website
	</div>
	<div class="overlayplay" id="overlayplay">
		Speel verder >>
	</div>
</div>
    <script src="https://vjs.zencdn.net/5.17.0/video.js"></script>
    <script src="js/video.js"></script>
</body>
</html>
