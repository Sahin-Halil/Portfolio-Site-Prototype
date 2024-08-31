<?php

//Start session
session_start(); 

//Check whether the user logged in
if (!isset($_SESSION['email'])) {
    header("Location: ../Web-pages/login.html");
    exit(); 
}

//Include the database connection file
include 'database_connection.php'; 

//Retrieve the blog_id, comment and date from the form
$blog_id = $_POST['blog_id'];
$comment = $_POST['comment'];
date_default_timezone_set('Europe/London');
$date = date('Y-m-d H:i:s', strtotime('now'));

//Update the database with the new comment
$sql = "INSERT INTO COMMENTS (blog_id, comment_text, datetime) VALUES ('$blog_id','$comment', '$date')";

//Check if the query was successful
if ($conn->query($sql) === TRUE) {
//YOUR CODE GOES HERE
closeConnection($conn);
header("Location: ../Web-pages/viewblog.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
closeConnection($conn);
?>