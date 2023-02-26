<?php

require_once 'dbh.inc.php';


$result = mysqli_query($conn, "SELECT * FROM users WHERE usersId = '{$_SESSION["userid"]}'");

$data = mysqli_fetch_assoc($result);

