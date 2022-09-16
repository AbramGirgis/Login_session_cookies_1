<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Form Styling-->
    <style type="text/css">
        th {
            text-align: right;
        }

        h3 {
            text-align: center;
        }
    </style>
    <title>Login Page</title>
</head>
<body>
<!--Adding the Form in a table-->
<table cellpadding="5" cellspacing="10" align="center" border="1">
    <h3>Login From using session and cookies with 'Remember Me' feature</h3>
    <form action="validate.php" method="post">
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Login" name="login"></td>
        </tr>
    </form>
</table>
</body>
</html>

<?php
if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];

    echo "<script>document.getElementById('email').value = '$email';</script>";
}
?>