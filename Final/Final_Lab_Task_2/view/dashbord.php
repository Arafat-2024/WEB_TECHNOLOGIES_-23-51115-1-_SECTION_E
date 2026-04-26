<?php
session_start();
$username = $_SESSION["username"] ?? "";

$isLoggedIn = $_SESSION["isloggedin"] ?? false;
if (!$isLoggedIn) {
    header("Location: registration.php");
    exit();
}
?>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>hello,<?php echo htmlspecialchars($username); ?> Welcome to the Dashboard!</h1>
    <p>This is a protected area that only logged-in users can access.</p>
    <a href="../Controller/logout.php">Logout</a>
</body>

</html>