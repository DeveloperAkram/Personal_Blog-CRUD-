
<?php
session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: ../users/login.php");
    }
include('../include/header.php'); 

?>

<a class="btn btn-success" href="index.php"> Back </a>
<br><br>
    <div class="content">
    <h2> Add New Category </h2>
    
    <form method="POST" action="store.php">
      <div class="form-group">
        <label for="Title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">

      </div>
      
      <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
    </form>
    
    
    </div>
<?php // include('../include/footer.php'); ?>