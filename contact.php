<?php 
	include_once 'header.php'
?>
	<div class="wrapper">

        <?php if (isset($_SESSION["useruid"])) {echo "<p>", "Du er nå logget inn som: " . $_SESSION["useruid"] . "</p>";}?>

        <div class="reg-form">
		<h1 id="blue">Kontakt meg her:</h1>
        <form action="includes/contact.inc.php" method="post">
			<label>Ditt navn / brukernavn:</label>
			<input type="text" name="name" <?php if (isset($_SESSION["useruid"])) {echo "value =" . $_SESSION["useruid"] . ":" . $_SESSION["userid"] . " readonly";}?> placeholder="Navn/brukernavn...">
			<label>Din email:</label>
			<input type="text" name="email" placeholder="Email...">
			<label>Hva handler det om?:</label>
			<input type="text" name="subject" placeholder="Tema...">
			<label>Skriv din melding her:</label>
			<textarea name="message" placeholder="Din melding..."></textarea>
			<button id="signbutton" type="submit" name="submit">Send Melding</button>
        </form>
		<?php
		#her sjekkes errorene i lenken.
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "emailsend") {
		echo "<p id='suksess'>Din melding blitt sendt!</p>";
		}
	}
?>
	</div>

<?php 
	include_once 'footer.php'
?>