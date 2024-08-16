<?php
include 'database_connection.php'; 

$enteredEmail = $_POST['email'];
$enteredPassword = $_POST['password'];

$sql = "SELECT * FROM USERS WHERE email = '$enteredEmail' AND password = '$enteredPassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    session_start();

    $_SESSION['email'] = $enteredEmail;
    $row = $result->fetch_assoc();
    $_SESSION['role'] = $row['role'];

    closeConnection($conn);

    header("Location: ../Web-pages/index.php");
} else {
    header("Location: ../Web-pages/login.html");
}

closeConnection($conn);
?>