<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Snegil">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" lang="sv">

		<title>
			RunezRock &ndash; Medlemmar
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
			<a href="index.php">
			<img id="logo" src="Images/runezrocklogoedit.png">
			</a>
			<div id="ButtonContainer">
				<a href="index.php">
					Hem
				</a>
				<a class="active" href="medlemmar.php">
					Medlemmar
				</a>
				<a href="kontakt.php">
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

			<div class="MedContainer">

				<div class="Medlem Left" id="m1">
					<img src="Images/Profilbild/PerTCrop.jpg" />
					<div class="MedlemText">
						<span class="MedNamn">Per Thilly</span>
						<span class="MedInstrument">Sång</span>
						<span class="MedOm">
							Sångaren med det breda registret, <br />
							från låga C till skithöga A.
						 </span>
					</div>
				</div>

				<br />

				<div class="Medlem Right" id="m2">
					<div class="MedlemText">
						<span class="MedNamn">Sonny Olausson</span>
						<span class="MedInstrument">Gitarr</span>
						<span class="MedOm">
							Den bäste kompgittaristen som emellanåt även drar iväg ett solo.
						 </span>
					</div>
					<img src="Images/Profilbild/SonnyCrop.jpg" />
				</div>

				<br />

				<div class="Medlem Left" id="m3">
					<img src="Images/Profilbild/GoranCrop.jpg" />
					<div class="MedlemText">
						<span class="MedNamn">Göran Lidh</span>
						<span class="MedInstrument">Trummor</span>
						<span class="MedOm">
							Otroligt taktfast trummis med full koll på paradiddlarna.
						 </span>
					</div>
				</div>

				<br />

				<div class="Medlem Right" id="m4">
					<div class="MedlemText">
						<span class="MedNamn">Pär Wallin</span>
						<span class="MedInstrument">Gitarr</span>
						<span class="MedOm">
							Sologitarrist som även han drar ett solo emellanåt.
						 </span>
					</div>
					<img src="Images/Profilbild/PelleCrop.jpg" />
				</div>

				<br />

				<div class="Medlem Left" id="m5">
					<img src="Images/Profilbild/KennethCrop.jpg" />
					<div class="MedlemText">
						<span class="MedNamn">Kenneth "Tjabbe" Carlsson</span>
						<span class="MedInstrument">Keyboards</span>
						<span class="MedOm">
							Eminent pianist med en otrolig kunskap om ackord.
						 </span>
					</div>
				</div>

				<br />

				<div class="Medlem Right" id="m6">
					<div class="MedlemText">
						<span class="MedNamn">Rasmus Thilly</span>
						<span class="MedInstrument">Bas</span>
						<span class="MedOm">
							Den bäste basisten som har den bäste sångaren till far.
						 </span>
					</div>
					<img src="Images/Profilbild/RasmusCrop.jpg" />
				</div>

			</div>

			<div id="Footer">
				<div id="FooterText">
					Sidan utvecklad och designad av <a href="mailto:144wallfin@gmail.com">Alfons Wallin</a>
				</div>
			</div>

	</body>
</html>
