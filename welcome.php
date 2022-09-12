<?php
session_start();
echo "Welcome " . $_SESSION['email'];
echo "<br><br><a href='logout.php'>Logout</a>";
