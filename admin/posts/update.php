<?php

 session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: ../users/login.php");
    }
include('../include/connect.php');

$con = connectBD();

    
 $id = $_GET['id'];
 
 $rand = rand(111111, 999999);

 $image = 'uploads/'.$rand.$_FILES['image']['name'];
 $upload = '../uploads/'.$rand.$_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],$upload);

 $title = $_POST['title'];
 $description = $_POST['description'];
 $date = $_POST['date'];
 $category_id = $_POST['category_id'];

 
  $sql = "UPDATE posts SET title= '$title', description='$description', image= '$image', date= '$date', category_id= '$category_id' WHERE id =$id ";
  
  if(mysqli_query($con, $sql)){
    
   header("Location: view.php?id=" . $id);
  } else{
    echo "Not Updated";
  }

?>
