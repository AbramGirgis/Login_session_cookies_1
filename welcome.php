<?php
session_start();
echo "Welcome " . $_SESSION['name'] ." Your email is: ".$_SESSION['email'];
echo "<br><br><a href='logout.php'>Logout</a>";
