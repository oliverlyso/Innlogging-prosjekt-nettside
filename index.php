<?php 
	include_once 'header.php'
?>
	<div class="wrapper">

		<h1>Hjem</h1>
		<?php
		#sjekker om brukeren er logget inn ved hjelp av if og endrer innholdet.
		if (isset($_SESSION["useruid"])) {
			echo "<p>Hallo i luken " . $_SESSION["useruid"] . "</p>";
		}
		?>
		<p>Dette er start siden.</p>
		<h2>Hva er dette nettstedet?</h2>
		<p>Denne nettsiden er en prosjekt nettside som viser fram prosjekter som for eksmpel log inn funksjonen osv.</p>
	
	</div>

<?php 
	include_once 'footer.php'
?>