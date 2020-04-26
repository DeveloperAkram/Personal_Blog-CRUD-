<?php


  $url = "http://localhost/blog/admin/";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>assets/css/style.css">

    <title>Admin Page</title>
  </head>
  <body>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
  <a class="navbar-brand" href="#">TechTalk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url; ?>categories/index.php">Category</a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="<?php echo $url; ?>posts/index.php">Post</a>
      </li>
      
    </ul>
  </div>
  </div>
</nav>

    <div class="main-content">

    <div class="container">
        <div class="row clearfix">
            
            <div class="col-md-3">
                <ul class="list-group">
                <li class="list-group-item active">Admin Menu</li>
                
                <li class="list-group-item"><a href="<?php echo $url; ?>categories/index.php">Category</a></li>
                <li class="list-group-item"><a href="<?php echo $url; ?>posts/index.php">Post</a></li>
                <li class="list-group-item"><a href="#">Profile</a></li>
                <li class="list-group-item"><a href="http://localhost/blog/admin/users/logout.php">Logout</a></li>
                
                
              </ul>
            </div>
            <div class="col-md-9">