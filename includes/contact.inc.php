<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $mailTo = "oliverlyso@gmail.com";
    $headers = "Fra: ".$mailFrom;
    $txt = "Du har mottat en mail fra ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("location: ../contact.php?error=emailsend");
}