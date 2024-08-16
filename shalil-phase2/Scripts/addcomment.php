<?php
session_start(); 

if (!isset($_SESSION['email'])) {
    header("Location: ../Web-pages/login.html");
    exit(); 
}

include 'database_connection.php'; 

$blog_id = $_POST['blog_id'];
$comment = $_POST['comment'];
date_default_timezone_set('Europe/London');
$date = date('Y-m-d H:i:s', strtotime('now'));


$sql = "INSERT INTO COMMENTS (blog_id, comment_text, datetime) VALUES ('$blog_id','$comment', '$date')";

if ($conn->query($sql) === TRUE) {
//YOUR CODE GOES HERE
closeConnection($conn);
header("Location: ../Web-pages/viewblog.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
closeConnection($conn);
?>