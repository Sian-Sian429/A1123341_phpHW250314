<?php
    session_start();

    if(isset($_SESSION["user"])) {
        echo "<h1> Welcome User! </h1>";
        echo "<a href='Logout.php'> LogOut </a>";
    } else{
        echo "illegal user";
        header("Refresh:2;url='Login.php'");
    }

?>