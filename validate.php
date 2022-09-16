<?php

//use the database
require_once "connection.php";

//Dummy credentials!
//$myEmail = "a@y.c";
//$myPass = "123";

if (isset($_POST['login'])) {

    //print the POST associative array
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $emailInput = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $passwordInput = strip_tags($_POST['password']);

    if (isset($db)) {
        try {
            $select_stmt = $db->prepare("SELECT name, email , password FROM login WHERE email = :email AND password = :password");
            $select_stmt->execute([':email' => $emailInput, ':password' => $passwordInput]);
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            if ($select_stmt->rowCount() > 0) {
                if (isset($_POST['remember'])) {
                    setcookie('email', $row['email'], time() + 60);
                }
                session_start();
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                header("location:welcome.php");
            } else {
                echo "Email or Password is invalid! <br> Click here to <a href='login.php'>try again</a>";
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

//    if ($emailInput == $myEmail and $passwordInput == $myPass) {
//        if (isset($_POST['remember'])) {
//            setcookie('email', $emailInput, time() + 60);
//        }
//        session_start();
//        $_SESSION['email'] = $emailInput;
//        header("location:welcome.php");
//    } else {
//        echo "Email or Password is invalid! <br> Click here to <a href='login.php'>try again</a>";
//    }
} else {
    header("location: login.php");
}

