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

//Retrieve the blogTitle, blogContent and date from the form
$blogTitle = $_POST['blogTitle'];
$blogContent = $_POST['blogContent'];
date_default_timezone_set('Europe/London');
$date = date('Y-m-d H:i:s', strtotime('now'));

//Update the database with the new blog post
$sql = "INSERT INTO BLOGS (title, body, datetime) VALUES ('$blogTitle', '$blogContent', '$date')";

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