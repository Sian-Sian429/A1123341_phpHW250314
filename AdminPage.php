<?php
session_start();

if (isset($_SESSION["admin"])) {
    echo "<h1> Welcome Admin! </h1>";
    echo "<a href='Logout.php'> LogOut </a>";
} else {
    echo "Illegal user";
    header("Refresh:2;url=Login.php");
}
?>

