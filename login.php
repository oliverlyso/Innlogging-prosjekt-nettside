<?php 
	include_once 'header.php'
?>
	<div class="wrapper">

    <div class="reg-form">
		<h1 id="blue">Logg inn</h1>
        <form action="includes/login.inc.php" method="post">
			<label>Skriv inn brukernavn/email:</label>
			<input type="text" name="uid" placeholder="Brukernavn/Email...">
			<label>Skriv inn passord:</label>
			<input type="password" name="pwd" placeholder="Passord...">
			<button id="signbutton" type="submit" name="submit">Logg inn</button>
			<p id="underbutton">Ny på denne nettsiden? <a id="underbutton" href="signup.php">Registrer deg</a></p>
        </form>
		<?php

	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyinput") {
		echo "<p id='error'>Du må fylle ut alle feltene</p>", "<style>input {background-color: #ffc4c4;}</style>";
		}
		else if ($_GET["error"] == "wronglogin") {
		echo "<p id='error'>Feil innlogings informasjon</p>";
		}
	else if ($_GET["error"] == "profile") {
		echo "<p id='error'>Du må logge inn for å bruke denne siden</p>";
		}
	else if ($_GET["error"] == "reg") {
		echo "<p id='suksess'>Du kan nå logge inn!</p>";
		}
	}
?>
	</div>
	</div>

<?php 
	include_once 'footer.php'
?>