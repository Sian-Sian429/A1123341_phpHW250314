<?php
session_start();
?>

<h1> Login Result </h1>

<?php

$defaultAdminName = "Admin";
$defaultAdminPwd = "123456";
$defaultUserName = "User";
$defaultUserPwd = "654321";
$userName = $_POST["uName"];
$userPassword = $_POST["uPassword"];

if($defaultAdminName == $userName && $defaultAdminPwd == $userPassword) {
    echo "Admin Login Success:";
    $_SESSION["admin"] = 1;
    $cookiedate = strtotime("+20 second", time());
    setcookie("userName", $defaultAdminName, $cookiedate);
    header("Location:AdminPage.php");
} else if ($defaultUserName == $userName && $defaultUserPwd == $userPassword) {
    echo "User Login Success:";
    $_SESSION["user"] = 1;
    $cookiedate = strtotime("+20 second", time());
    setcookie("userName", $defaultUserName, $cookiedate);
    header("Location:UserPage.php");
} else {
    echo "Login Failed, will send you back to login again";
    header("Refresh:3;url='Login.php'");
}


?>