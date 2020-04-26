<?php 

$email = $_POST['email'];
$pass = $_POST['password'];

$con = mysqli_connect('localhost','root','20104030','blog_db');
    $sql = "SELECT *FROM users WHERE email='$email' AND password= '$pass' ";
    $result = mysqli_query($con, $sql);

$rowcount = mysqli_num_rows($result);

if($rowcount == 1) {
    session_start();
    $_SESSION['login'] = true;
    header("Location: ../index.php");
}
else{
    session_start();
    $_SESSION['error'] = true;
    header("Location: login.php");
}

?>
