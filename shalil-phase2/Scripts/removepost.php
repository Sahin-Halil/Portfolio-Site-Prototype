<?php
session_start();

if ($_SESSION['role'] != 'admin' || !isset($_SESSION['email'])){
    header("Location: ../Web-pages/viewblog.php");
    exit();
}

include 'database_connection.php'; 

$blog_id = $_GET['blog_id'];

$sql = "DELETE FROM comments WHERE blog_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $blog_id);
$stmt->execute();

$sql = "DELETE FROM blogs WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $blog_id);
$stmt->execute();

closeConnection($conn);

header("Location: ../Web-pages/viewblog.php");
?>