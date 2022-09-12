<?php

//Dummy credentials!
$myEmail = "a@y.c";
$myPass = "123";

if (isset($_POST['login'])) {
    $emailInput = $_POST['email'];
    $passwordInput = $_POST['password'];

    if ($emailInput == $myEmail and $passwordInput == $myPass) {
        if (isset($_POST['remember'])) {
            setcookie('email', $emailInput, time() + 60);
        }
        session_start();
        $_SESSION['email'] = $emailInput;
        header("location:welcome.php");
    } else {
        echo "Email or Password is invalid! <br> Click here to <a href='login.php'>try again</a>";
    }
} else {
    header("location: login.php");
}

