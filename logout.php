<?php
session_start();
session_reset();
session_destroy();
echo "You have successfully logged out! <br><br> Click here to <a href='login.php'>login again</a>";

