<?php
if(isset($_COOKIE["userName"])) {
    echo "Welcome back ".$_COOKIE["userName"];
}
?>

<h1> Please Login to use the system </h1>
<form action = "LoginCheck.php" method = "POST">
Please input your name: <input type = "text" name = "uName"> <br>
Please input your password: <input type = "password" name = "uPassword"> <br>
<input type = "submit">
</form>