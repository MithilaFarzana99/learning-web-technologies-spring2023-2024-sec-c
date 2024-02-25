<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - XCompany</title>
</head>
<body>

    <table align="center" border= "1" width = "100%">
        <tr>
            <td>
                <h2>XCompany</h2>
            </td>
        </tr>
        <tr>
            <td align="right">
                <a href="home.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td>
                <form action="logincheck.php" method="post">
                    <fieldset>
                        <legend>LOGIN</legend>
                        User Name: <input type="text" name="username" /><br>
                        <hr width="100%" size=".5" align="center" color="gray">
                        Password: <input type="password" name="password" /><br>
                        <hr width="100%" size=".5" align="center" color="gray">
                        <input type="checkbox" name="rememberMe"> Remember Me<br>
                        <hr width="100%" size=".5" align="center" color="gray">
                        <input type="submit" name="submit" value="Submit">
                        <a href="forgotPassword.php">Forgot Password?</a>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <p align= "center">&copy; 2017 XCompany</p>
            </td>
        </tr>
    </table>

</body>
</html>
