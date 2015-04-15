<?php
/**
 * Created by PhpStorm.
 * User: IMGauree
 * Date: 4/6/2015
 * Time: 11:52 AM
 */
?>

<html>
<head>
    <title>SignUp Form</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>


<form>
    <div class="login">
    <table>
            <h1>
                Sign-Up for <span>Konne</span>Kt</a>
            </h1>
        <tr>

            <td> <input name="firstname" type="text"  placeholder="First Name"></td>
        </tr>
        <tr>
            <td> <input name="lastname" type="text"  placeholder="Last Name"></td>

        </tr>
        <tr>

            <td><input name="username" type="text" placeholder="Username" ></td>
        </tr>
        <tr>

            <td> <input name="email" type="text"  placeholder="Email"></td>

        </tr>

            <tr>

              <td><input name = "password" type="password" placeholder="Password"></td>
              <tr>
            <tr>

                <td><input name= "confirm_password" type="password" placeholder="Confirmpassword"></td>

        </tr>

        <tr>
            <td>
                <label for="radiolabel">
            <input name = "sex " type="radio" value="male" >Male
            <input name = "sex " type="radio" value="female" >Female

                </td>
        </tr>
        <tr>
        <td>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
            </td>
        </tr>

    </table>

</form>
</div>
</body>

</html>