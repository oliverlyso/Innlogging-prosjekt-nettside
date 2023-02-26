<?php 
#Nettsiden vet du er logget inn ved hjelp av sessions og når man sletter sessionen vet den ikke at du er logget inn.
session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();