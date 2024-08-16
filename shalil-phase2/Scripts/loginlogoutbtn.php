<?php
session_start();
if (isset($_SESSION['email'])) {
    echo '<li><a href="../Scripts/logout.php">Logout</a></li>';
} else {
    echo '<li><a href="login.html">Login</a></li>';
}
?>