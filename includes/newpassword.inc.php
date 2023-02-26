<?php

session_start();

if (isset($_POST["submit"])) {
  // Get the current password and the new password from the form
  $current_password = $_POST["current_password"];
  $new_password = $_POST["new_password"];

  // Check if any of the fields are empty
  if (empty($current_password) || empty($new_password)) {
    // Redirect to the form with an error message
    $_SESSION['error'] = 'emptyinput';
    header("location: ../newpassword.php");
    exit();
  }
  
  // Connect to the database
  require_once 'dbh.inc.php';
  
  // Include the changePassword function
  require_once 'functions.inc.php';
  
  // Call the changePassword function
  if (changePassword($conn, $new_password, $current_password)) {
    // Password was changed successfully
    // Redirect to the form with a success message
    header("location: ../newpassword.php");
    exit();
  } else {
    // An error occurred
    // Redirect to the form with an error message
    header("location: ../newpassword.php");
    exit();
  }
}