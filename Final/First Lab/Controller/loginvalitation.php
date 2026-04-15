<?php
session_start(); //must dite hobe jdi session use korte chai

$username = trim($_POST["username"] ?? ""); // here post method Safe way to read form data
$name = $_POST["name"] ?? "";
$mobilenumber = $_POST["mobilenumber"] ?? "";
$email = $_POST["email"] ?? "";

$hasUsernameError = true; //error gula track korar jonno variable create korechi
$hasName = true;
$hasMobileNumber = true;
$hasEmail = true;

if (!$username) // !$username that means if username is empty, then it will be true, and we will set the error message in session and set the error flag to true
{
    $_SESSION["usernameerror"] = "Username is required";
    $hasUsernameError = true;
} else {
    unset($_SESSION["usernameerror"]); // if there is no error, then we will unset the error message from session and set the error flag to false
    $hasUsernameError = false; //Start with the assumption that there is no error, and if there is an error, we will set it to true
}

if (!$name) {
    $_SESSION["nameerror"] = "Name is required";
    $hasName = true;
} else {
    unset($_SESSION["nameerror"]);
    $hasName = false;
}

if (!$mobilenumber) {
    $_SESSION["mobilenumbererror"] = "Mobile number is required";
    $hasMobileNumber = true;
} else {
    unset($_SESSION["mobilenumbererror"]);
    $hasMobileNumber = false;
}

if (!$email) {
    $_SESSION["emailerror"] = "Email is required";
    $hasEmail = true;
} else {
    unset($_SESSION["emailerror"]);
    $hasEmail = false;
}


if ($hasUsernameError || $hasName || $hasMobileNumber || $hasEmail) {
    header("Location: ../Veiw/login.php"); // if there is any error, then we will redirect to the login page
    exit();
} else // if there is no error, then we will move to the next step for credential check
{
    echo "<h1>Credential check successful</h1>";
}
