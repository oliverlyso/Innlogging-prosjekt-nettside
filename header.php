<?php
	#starter en session
	session_start();
?>
<!doctype html>
	<html lang="no">
	<html dir="ltf">

 	<head>
		<meta charset="utf-8">
		<title>Php Prosjekt</title>
		<link rel="icon" type="image/x-icon" href="img/logo.svg">

		<link rel="stylesheet" type="text/css" href="css/global.css">
		<link rel="stylesheet" href="https://use.typekit.net/ros0buv.css">

	</head>
	<body>

		<header>
			<a href="index.php"><img class="logo" src="img/logo.svg" alt="logo"></a>
			<nav>
				<ul class="nav-links">
					<li><a href="index.php">Hjem</a></li>
					<li><a href="games.php">Spill</a></li>
					<?php
						#sjekker om brukeren er logget inn ved hjelp av if/else og endrer innholdet.
						if (isset($_SESSION["useruid"])) {
							echo "<li><a href='profile.php'>Din profil</a></li>";
							echo "<li><a id='redhover' href='includes/logout.inc.php'>Log ut</a></li>";
						}
						else {
							echo "<li><a href='signup.php'>Registrer</a></li>";
							echo "<li><a id='greenhover' href='login.php'>Logg inn</a></li>";
						}
					?>
				</ul>
			</nav>
			<a class="cta" href="contact.php"><button>Kontakt</button></a>
		</header>
	