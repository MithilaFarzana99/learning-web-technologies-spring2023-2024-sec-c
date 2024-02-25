<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
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
                <form action="register_action.php" method="post">
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        Name: <input type="text" name="name" /><br>
                        <hr width="100%" size="1" align="center">
                        Email: <input type="email" name="email" /> <abbr title="hint:sample@example.com">i</abbr> <br> 
                        <hr width="100%" size="1" align="center">
                        User Name: <input type="text" name="username" /><br>
                        <hr width="100%" size="1" align="center">
                        Password: <input type="password" name="password" /><br>
                        <hr width="100%" size="1" align="center">
                        Confirm Password: <input type="password" name="confirm_password" /><br>
                        <hr width="100%" size="1" align="center">
                     <fieldset>   
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Other"> Other<br>
                     </fieldset>
                     <hr width="100%" size="1" align="center">
                     <fieldset> 
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob" /><br>
                    </fieldset>
                        <hr width="100%" size="1" align="center">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset">
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
