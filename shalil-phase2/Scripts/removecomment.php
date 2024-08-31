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

//Retrieve the comment_id from the URL
$comment_id = $_GET['comment_id']; 

//Delete the comment from the database
$sql = "DELETE FROM comments WHERE comment_id = ?";

//Prepare the SQL statement
$stmt = $conn->prepare($sql);


//Bind the comment_id parameter to the SQL statement
$stmt->bind_param("i", $comment_id);

//Execute the SQL statement
if ($stmt->execute()) {
    closeConnection($conn);
    header("Location: ../Web-pages/viewblog.php");
} else {
    echo "Error: " . $stmt->error;
}

closeConnection($conn);
?>