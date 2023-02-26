<?php 
  include_once 'header.php';
?>
  <div class="wrapper">
    <div class="reg-form">
      <h1 id="blue">Endre passord</h1>
      <form action="includes/newpassword.inc.php" method="post">
        <label>Skriv inn passord:</label>
        <input type="password" name="current_password" placeholder="Passord...">
        <label>Skriv inn nytt passord:</label>
        <input type="password" name="new_password" placeholder="Nytt passord...">
        <button id="signbutton" type="submit" name="submit">Endre passord</button>
      </form>
      <?php
      #her sjekkes errorene i lenken.
      if (isset($_SESSION['error'])) {
        if ($_SESSION['error'] == "emptyinput") {
          echo "<p id='error'>Du må fylle ut alle feltene</p>", "<style>input {background-color: #ffc4c4;}</style>";
        }
        else if ($_SESSION['error'] == "wronglogin") {
          echo "<p id='error'>Feil passord</p>", "<style>input {background-color: #ffc4c4;}</style>";
        }
        else if ($_SESSION['error'] == "reg") {
          echo "<p id='suksess'>Du kan nå logge inn!</p>";
        }
        unset($_SESSION['error']);
      }
      ?>
    </div>
  </div>

<?php 
  include_once 'footer.php';
?>