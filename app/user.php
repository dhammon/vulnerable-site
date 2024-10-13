<?php
session_start();
if($_SESSION['logged_in'] != '1') {
    echo "Unauthorized";
    exit;
}
echo "<h1>User Page</h1>";
echo "<a href='home.php?version=beta'>Home Page</a><br>";
echo "A place for any authenticated user!";
echo "<br><br>";
include("footer.php");
