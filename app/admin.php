<?php
session_start();
if($_SESSION['logged_in'] != '1') {
    echo "Unauthorized";
    exit;
}
if($_COOKIE['role'] == 'administrator') {
    echo "<h1>Administrator Page</h1>";
    echo "<a href='home.php?version=beta'>Home Page</a><br>";
    echo "A place for high privileged users!";
} else {
    echo "<a href='home.php?version=beta'>Home Page</a><br>";
    echo "UNAUTHORIZED!";
}
echo "<br><br>";
include("footer.php");
