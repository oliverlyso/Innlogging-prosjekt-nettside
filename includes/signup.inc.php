<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        #linken i header gjør at GET metoden på signup.php vet hva den skal gjøre.
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

 
    if (invalidEmail($email) !== false) {
        #linken i header gjør at GET metoden på signup.php vet hva den skal gjøre.
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        #linken i header gjør at GET metoden på signup.php vet hva den skal gjøre.
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        #linken i header gjør at GET metoden på signup.php vet hva den skal gjøre.
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

    header("location: ../login.php?error=reg");

}

else {
    header("location: ../signup.php");
    exit();
}