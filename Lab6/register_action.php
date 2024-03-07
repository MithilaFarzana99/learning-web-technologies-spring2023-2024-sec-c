<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags($_POST['name']);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $username = strip_tags($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }


    $_SESSION['users'][] = [
        'name' => $name,
        'email' => $email,
        'username' => $username,
        'password' => $password, 
        'gender' => $gender,
        'dob' => $dob
    ];


    header('Location: login.php');
    exit();
}
?>
