<?php
$theme = $_POST["theme"] ?? "light";
setcookie("theme", $theme, time() + (86400 * 30), "/");
header("Location: ../view/dashbord.php");
exit();
