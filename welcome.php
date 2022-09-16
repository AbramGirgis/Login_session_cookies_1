<?php
session_start();
echo "Welcome <span><strong>" . $_SESSION['name'] . "</strong></span>
<br>Your email is: <span><strong>" . $_SESSION['email'] . "</strong></span>";
echo "<br><br><a href='logout.php'>Logout</a>";
