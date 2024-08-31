<?php
//Create datrabase connection
include 'database_connection.php'; 

//Retrieve the email and password from the form
$enteredEmail = $_POST['email'];
$enteredPassword = $_POST['password'];

//Check if the email and password match the database
$sql = "SELECT * FROM USERS WHERE email = '$enteredEmail' AND password = '$enteredPassword'";
$result = $conn->query($sql);

//If the email and password match, start a session and store the email and role in the session
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