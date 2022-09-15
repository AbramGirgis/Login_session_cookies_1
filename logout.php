<?php
session_start();
session_reset();
session_destroy();
// If I want to destroy the cookie on logging out:
//if (isset($_COOKIE['email'])) {
//    $email = $_COOKIE['email'];
//    setcookie('email',$email,time()-1);
echo "You have successfully logged out! <br><br> Click here to <a href='login.php'>login again</a>";

