<?php

$usernameErr = $passwordErr = "";
$username = $password = "";

function hasValidSpecialChars($password) {
    $specialChars = ['@', '#', '$', '%'];
    foreach (str_split($password) as $char) {
        if (in_array($char, $specialChars)) {
            return true;
        }
    }
    return false;
}

function hasValidCharacters($username) {
    foreach (str_split($username) as $char) {
        if (!ctype_alnum($char) && $char !== '.' && $char !== '-' && $char !== '_') {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username)) {
        $usernameErr = "Username is required.";
    } else if (strlen($username) < 2) {
        $usernameErr = "Username must be at least 2 characters long.";
    } else if (!hasValidCharacters($username)) {
        $usernameErr = "Username can only contain alphanumeric characters, period, dash, or underscore.";
    }

    if (empty($password)) {
        $passwordErr = "Password is required.";
    } else if (strlen($password) < 8) {
        $passwordErr = "Password must be at least 8 characters long.";
    } else if (!hasValidSpecialChars($password)) {
        $passwordErr = "Password must contain at least one special character: @, #, $, %.";
    }
}

// Check if there were any errors and display them
if ($usernameErr || $passwordErr) {
    echo "<p style='color: red;'>Please correct the following errors:</p>";
    echo "<p style='color: red;'>{$usernameErr}</p>";
    echo "<p style='color: red;'>{$passwordErr}</p>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
    <form method="post" action="task1.php">
        <fieldset>
            <legend> LOGIN </legend>
        User Name: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"/> <br>
        Password: <input type="password" name="password" value=""/> <br>
         <input type="checkbox" name="remember" <?php if (isset($_POST['remember'])) echo 'checked="checked"'; ?>/> Remember Me <br>
         <input type="submit" name="button" value="Submit"/> 
         <a href="task2.html"> Forgot Password </a> <br>
         </fieldset>
    </form>
</body>
</html>
