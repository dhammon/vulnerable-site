<?php
session_start();
if($_SESSION['logged_in'] != '1') {
    echo "Unauthorized";
    exit;
}
echo "<h1>Welcome!</h1>";
echo "<a href='user.php?version=beta'>User Page</a> | <a href='admin.php?version=beta'>Admin Page</a>";
echo "<br><br>";
include("footer.php");
