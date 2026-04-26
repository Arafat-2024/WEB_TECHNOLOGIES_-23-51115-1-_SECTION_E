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

// Additional validation: Check if password and confirm password match
//name must be 3 characters long
if ($username && strlen($username) < 3) {
    $_SESSION["usernameerror"] = "Username must be at least 3 characters long";
    $hasUsernameError = true;
} else {
    if (!$hasUsernameError) {
        unset($_SESSION["usernameerror"]);
    }
}

//email must be in valid format
if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["emailerror"] = "Invalid email format";
    $hasEmailError = true;
} else {
    if (!$hasEmailError) {
        unset($_SESSION["emailerror"]);
    }
}

if ($password !== $confirmpassword) {
    $_SESSION["confirmpassworderror"] = "Passwords do not match";
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
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["isloggedin"] = true;
    header("Location: ../view/dashbord.php");
    exit();
}
