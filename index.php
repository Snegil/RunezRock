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
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="scripts.js"></script>
	</head>
	<body>
				<div id="container">
						<div id="wholepage">
								<div id="logotyp">
									<a href="medlemmar.php">
									<i class="fas fa-angle-double-left button" title="Medlemmar"></i>
									</a>
										<a href="index.php">
										<img class="logoimage" src="Images/runezrocklogoedit.png">
										</a>
									<a href="kontakt.php">
									<i class="fas fa-angle-double-right button" title="Kontakt"></i>
									</a>
								</div>
										<img id="bandimage" src="Images/runezrockband2.jpg">	
													
										<div id="infobar">
											<a target="_blank" href="https://www.facebook.com/Runez-Rock-109810822368941/">
											<img id="flogo" alt="Runez Rock finns på facebook!" src="Images/flogo2.png">
											</a>
											<iframe id="spotifyI" src="https://open.spotify.com/embed/track/40roys5JxjibSvp27c9ts6" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
										</div>
										
								<p id="about">
									<?php
									    $myfilename = "about.txt";
									    if(file_exists($myfilename)){
									      echo file_get_contents($myfilename);
									    }
									?>
								</p>
									
						</div>
				</div>
	</body>	
</html>