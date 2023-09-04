<?php
session_start();
if(isset($_GET['username']) && isset($_GET['password'])) {
    #database lookup
    $conn = mysqli_connect("localhost", "root", "", "company");
    $sql = "SELECT * FROM users WHERE username='".$_GET['username']."' AND password='".$_GET['password']."'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 0) {
        echo "Wrong username/password";
    } else {
        $_SESSION['logged_in'] = 1;
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
        setcookie("role", $role);
        include("home.php");
    }
    mysqli_close($conn);
} else {
    echo<<<FORM
    <form method='GET' path='/index.php'>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password"><br><br>
        <input type="hidden" name="version" value="beta">
        <input type="submit" value="Submit">
    </form>
    FORM;
}
?>
