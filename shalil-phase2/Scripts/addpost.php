<?php
session_start(); 

if (!isset($_SESSION['email'])) {
    header("Location: ../Web-pages/login.html");
    exit();
}

include 'database_connection.php'; 

$blogTitle = $_POST['blogTitle'];
$blogContent = $_POST['blogContent'];
date_default_timezone_set('Europe/London');
$date = date('Y-m-d H:i:s', strtotime('now'));

$sql = "INSERT INTO BLOGS (title, body, datetime) VALUES ('$blogTitle', '$blogContent', '$date')";

if ($conn->query($sql) === TRUE) {
//YOUR CODE GOES HERE
closeConnection($conn);
header("Location: ../Web-pages/viewblog.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
closeConnection($conn);

?>