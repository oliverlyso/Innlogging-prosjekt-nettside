<?php 
	include_once 'header.php'
?>
	<div class="wrapper">

		<h1>Spill</h1>
		<?php
		#sjekker om brukeren er logget inn ved hjelp av if og endrer innholdet.
		if (isset($_SESSION["useruid"])) {
			echo "<p>Hva vil du spille i dag " . $_SESSION["useruid"] . "?</p>";
		}
        else {
            echo "<p>Hva vil du spille i dag?</p>";
        }
		?>

        <div class="subwrappergames">
        <div class="column">

        <a href="examplegame.php"><button>Blackjack</button></a>
        <a href="examplegame.php"><button>Blackjack</button></a>
        <a href="examplegame.php"><button>Blackjack</button></a>
        <a href="examplegame.php"><button>Blackjack</button></a>

        </div>
        </div>
    </div>

<?php 
	include_once 'footer.php'
?>