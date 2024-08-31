<?php
//Start session
session_start();

//Check if the user is an admin, if not redirect to the viewblog page
if ($_SESSION['role'] != 'admin' || !isset($_SESSION['email'])){
    header("Location: ../Web-pages/viewblog.php");
    exit();
}

//Include the database connection file
include 'database_connection.php'; 

//Retrieve the blog_id from the URL
$blog_id = $_GET['blog_id'];

//Delete the comments associated with the blog post
$sql = "DELETE FROM comments WHERE blog_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $blog_id);
$stmt->execute();

//Delete the blog post from the database
$sql = "DELETE FROM blogs WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $blog_id);
$stmt->execute();

//Close the database connection
closeConnection($conn);

//Redirect to the viewblog page
header("Location: ../Web-pages/viewblog.php");
?>