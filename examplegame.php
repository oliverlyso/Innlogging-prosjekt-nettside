<?php 
	include_once 'header.php'
?>
    	<?php
        if (!isset($_SESSION["useruid"])) {
			echo "<div class='blockwrap'><div class='blockscreen'><div class='blockcontent'><img src='img/error.png' class='errorpng' alt='error'><p class='blockscreenp'>Du må logge inn for å spille dette spillet</p><a class='cta' href='login.php'><button>Logg Inn</button></a></div></div></div><style>.wrapper {display: none;}</style>";
		}

		?>

	<div class="wrapper">

		<h1>Eksempel spill</h1>
        <p>Ingen spill å se her enda</p>

	</div>

<?php 
	include_once 'footer.php'
?>