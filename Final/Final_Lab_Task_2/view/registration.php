<?php
session_start();
$usernameError = $_SESSION["usernameerror"] ?? "";
$emailError = $_SESSION["emailerror"] ?? "";
$passwordError = $_SESSION["passworderror"] ?? "";
$confirmPasswordError = $_SESSION["confirmpassworderror"] ?? "";



$isLoggedIn = $_SESSION["isloggedin"] ?? false;

if ($isLoggedIn) {
    header("Location: ../view/dashbord.php");
    exit();
}
?>


<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <h2>Registration Form</h2>
    <form method="post" action="../Controller/registrationvalidation.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="User name required" value="<?= htmlspecialchars($username) ?>"></td>
                <td><?php echo "$usernameError"; ?></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" placeholder="Email required" value="<?= htmlspecialchars($email) ?>"></td>
                <td><?php echo "$emailError"; ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Password required"></td>
                <td><?php echo "$passwordError"; ?></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirmpassword" placeholder="Confirm password required"></td>
                <td><?php echo "$confirmPasswordError"; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>

</html>