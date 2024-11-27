<?php
 
include('app/config/session.php');
include('app/config/config.php');
include('app/config/db.php');
 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
   
 
    $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";
    $result = $db->query($sql);
 
    if ($result->num_rows > 0) {
 
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['message']['error'] = "Invalid login credentials.";
        header("Location: login.php");
        exit();
    }
}
?>