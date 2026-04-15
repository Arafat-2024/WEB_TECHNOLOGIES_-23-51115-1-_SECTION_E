<?php
session_start(); //must dite hobe jdi session use korte chai

$usernameerror = $_SESSION['usernameerror'] ?? "";
$nameerror = $_SESSION['nameerror'] ?? "";
$mobileerror = $_SESSION['mobilenumbererror'] ?? "";
$emailerror = $_SESSION['emailerror'] ?? "";

unset($_SESSION['usernameerror'], $_SESSION['nameerror'], $_SESSION['mobilenumbererror'], $_SESSION['emailerror']);
?>

<html>

<head>
    <title>From Validation</title>
</head>

<body>
    <h2>From Validation</h2>
    <form method="post" action="../Controller/loginvalitation.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="User name required"></td>
                <td>
                    <p style='color: red;'><?php echo "$usernameerror"; ?></p>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="Name required"></td>
                <td>
                    <p style='color: red;'><?php echo "$nameerror"; ?></p>
                </td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="text" name="mobilenumber" placeholder="Mobile number required"></td>
                <td>
                    <p style='color: red;'><?php echo "$mobileerror"; ?></p>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" placeholder="Email required"></td>
                <td>
                    <p style='color: red;'><?php echo "$emailerror"; ?></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>

</html>