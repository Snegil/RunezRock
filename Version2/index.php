<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Snegil">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" lang="sv">

		<title>
			Runez Rock
		</title>

		<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="normalize.css">

		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="mobil.css">

		<script src="jquery-3.4.1.js"></script>
		<script src="javascript.js"></script>
	</head>
	<body>
		<div id="topbar">
			<img id="logo" src="Images/runezrocklogoedit.png">
			<div id="ButtonContainer">
				<a class="active" href="#1">
					Hem
				</a>
				<a href="#2">
					Medlemmar
				</a>
				<a href="#3">
					Kontakt
				</a>
			</div>
			<div id="SocialMediaContainer">
				<a target="_blank" href="https://www.instagram.com/runezrock/">
					<img alt="Instagram" src="Images/Icons/IG_logo_grey.png">
				</a>
				<a target="_blank" href="https://www.facebook.com/Runez-Rock-109810822368941/">
					<img alt="Facebook" src="Images/Icons/f_logo_RGB-Grey_58.png">
				</a>
				<a target="_blank" href="https://open.spotify.com/artist/7nSfqqSbiKs5r2muYY2upm">
					<img alt="Spotify" src="Images/Icons/Spotify_Icon_RGB_Black.png">
				</a>
				<a onclick="FastToggle('SpotifyIframe')">
				<img class="BarsWNoteKnapp" src="Images/Icons/BarsWNote.png">
				</a>
			</div>
		</div>

		<iframe id="SpotifyIframe" src="https://open.spotify.com/embed/album/1lvwb13OwueK1e4lQ1UyJx" width="300" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

		

	</body>
</html>
