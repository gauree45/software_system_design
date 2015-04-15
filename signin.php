<?php
/**
 * Created by PhpStorm.
 * User: IMGauree
 * Date: 4/6/2015
 * Time: 2:24 PM
 */
?>

<head>
    <meta charset="utf-8">

    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<div class="login">
    <h1>Login to<span>Konne</span>Kt</a></h1>
    <form method="post" action="">
        <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">

                <p class="forgot-password">

            <a href="signin.php">Forgot your password?</a></p>


        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
</div>

<div class="login-help">
    <p>Do not have an account? <a href="signup.php">Click here to create it</a>.</p>
</div>
</body>
</html>