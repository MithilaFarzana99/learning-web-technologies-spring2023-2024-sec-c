
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rememberMe = isset($_POST['rememberMe']);

    if ($username == "" || $password == "") {
        $_SESSION['flag'] = true;
        $_SESSION['username'] = $username;

        if ($rememberMe) {
            setcookie('username', $username, time() + 3600 , '/'); 
        }
        header('location: home.php');
    } else {
        echo "invalid username or password!";
    }
} else {
    header('location: login.php'); 
}
?>
