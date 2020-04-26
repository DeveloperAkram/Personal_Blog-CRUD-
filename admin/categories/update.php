<?php

  
    if(isset($_POST['update'])) {
        
        $id = $_GET['id'];
        $title = $_POST['title'];
       
        include('../include/connect.php'); 
        $con = connectBD();
        $sql = "UPDATE categories SET title='$title' WHERE id = '$id' ";
  
        $result = mysqli_query($con, $sql);
        
        header('Location: index.php');
        //header("Location:http://localhost/blog/admin/categories/");

    } else{
          echo "Not Updated";
    }
?>
