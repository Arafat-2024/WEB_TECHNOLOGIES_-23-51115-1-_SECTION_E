<?php
session_start();

$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$confirmpassword = $_POST["confirmpassword"] ?? "";

$hasUsernameError = true;
$hasEmailError = true;
$hasPasswordError = true;
$hasConfirmPasswordError = true;

if (!$username) {
    $_SESSION["usernameerror"] = "Username is required";
    $hasUsernameError = true;
} else {
    unset($_SESSION["usernameerror"]);
    $hasUsernameError = false;
}

if (!$email) {
    $_SESSION["emailerror"] = "Email is required";
    $hasEmailError = true;
} else {
    unset($_SESSION["emailerror"]);
    $hasEmailError = false;
}

if (!$password) {
    $_SESSION["passworderror"] = "Password is required";
    $hasPasswordError = true;
} else {
    unset($_SESSION["passworderror"]);
    $hasPasswordError = false;
}

if (!$confirmpassword) {
    $_SESSION["confirmpassworderror"] = "Confirm password is required";
    $hasConfirmPasswordError = true;
} else {
    unset($_SESSION["confirmpassworderror"]);
    $hasConfirmPasswordError = false;
}


if ($hasUsernameError || $hasEmailError || $hasPasswordError || $hasConfirmPasswordError) {
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["confirmpassword"] = $confirmpassword;
    header("Location: ../view/registration.php");
    exit();
} else {
    echo "<h1>Validation successful</h1>";
    Header("Location: ../View/dashboard.php");
    exit();
}
