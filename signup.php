<?php 
	include_once 'header.php'
?>
	<div class="wrapper">

    <div class="reg-form">
		<h1 id="blue">Registrer deg her</h1>
        <form action="includes/signup.inc.php" method="post">
			<label>Ditt fulle navn:</label>
			<input type="text" name="name" placeholder="Fullt navn...">
			<label>Din epost:</label>
			<input type="text" name="email" placeholder="Epost...">
			<label>Velg brukernavn:</label>
			<input type="text" name="uid" placeholder="Brukernavn...">
			<label>Skriv inn passord:</label>
			<input type="password" name="pwd" placeholder="Passord...">
			<label>Skriv inn passord igjen:</label>
			<input type="password" name="pwdrepeat" placeholder="Tast inn passord igjen...">
			<button id="signbutton" type="submit" name="submit">Registrer Bruker</button>
			<p id="underbutton">Har du allerede en bruker? <a id="underbutton" href="login.php">Logg inn</a></p>

        </form>
		<?php
		#her sjekkes errorene i lenken.
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emptyinput") {
		echo "<p id='error'>Du må fylle ut alle feltene</p>", "<style>input {background-color: #ffc4c4;}</style>";
		}
		else if ($_GET["error"] == "invalidemail") {
		echo "<p id='error'>Velg en fungerende email</p>";
		}
		else if ($_GET["error"] == "passwordsdontmatch") {
			echo "<p id='error'>Sjekk at passordene er like</p>";
		}
		else if ($_GET["error"] == "stmtfailed") {
			echo "<p id='error'>Oops, noe uforventet skjedde</p>";
		}
		else if ($_GET["error"] == "invalidemail") {
			echo "<p id='error'>Velg en fungerende email</p>";
		}
		else if ($_GET["error"] == "usernametaken") {
			echo "<p id='error'>Brukernaven er allerede i bruk</p>";
		}
		else if ($_GET["error"] == "none") {
			echo "<p id='suksess'>Du har registrert din bruker!</p>";
		}
	}
?>
	</div>
	</div>

<?php 
	include_once 'footer.php'
?>