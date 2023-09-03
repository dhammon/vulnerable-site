<?php
session_start();
if($_SESSION['logged_in'] != '1') {
    echo "Unauthorized";
    exit;
}
if($_COOKIE['role'] == 'administrator') {
    echo "<h1>Administrator Page</h1>";
} else {
    echo "<h1>User Page</h1>";
}

echo "Version: ".$_GET['version'];