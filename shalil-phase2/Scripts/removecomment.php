<?php
session_start();

if ($_SESSION['role'] != 'admin' || !isset($_SESSION['email'])){
    header("Location: ../Web-pages/viewblog.php");
    exit();
}

include 'database_connection.php'; 

$comment_id = $_GET['comment_id']; 

$sql = "DELETE FROM comments WHERE comment_id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $comment_id);

if ($stmt->execute()) {
    closeConnection($conn);
    header("Location: ../Web-pages/viewblog.php");
} else {
    echo "Error: " . $stmt->error;
}

closeConnection($conn);
?>