<?php 
	include_once 'header.php'
?>
	<div class="wrapper">
		<?php
		#sjekker om brukeren er logget inn ved hjelp av if og endrer innholdet.
		if (isset($_SESSION["useruid"]) === false) {
			header("location: login.php?error=profile");
			exit();
		}
		?>
		<h1>Din Profil</h1>

		<div class="bruker__div">
		<img class="avatar" src="img/avatar.svg" alt="avatar">

		<?php
		include_once 'includes/userinfo.inc.php';

		echo "<div class='bruker__div__bruker'>";

		echo "<div>";
		echo "<p>Bruker ID:</p>";
		echo "<p>" . $data['usersId'] ."</p>";
		echo "</div>";

		echo "<div>";
		echo "<p>Brukernavn:</p>";
		echo "<p>" . $data['usersUid'] ."</p>";
		echo "</div>";

		echo "</div>";

		echo "<div class='bruker__div__bruker'>";
		echo "<div>";
		echo "<p>Email:</p>";
		echo "<p>" . $data['usersEmail'] ."</p>";
		echo "</div>";

		echo "<div>";
		echo "<p>Passord:</p>";
		echo "<p>********</p>";
		echo "<p id='underbutton'><a id='underbutton' href='newpassword.php'>Bytt passord</a></p>";
		echo "</div>";
		echo "</div>";

		?>

		</div>
		

		

<?php 
	include_once 'footer.php'
?>