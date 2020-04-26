<?php 

    session_start();
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
</head>

<body>

    <br><br><br>

    <div class="container">
        <div class="row">
           
            <div class="col-md-6 col-md-offset-3">
               
                <h2> Login </h2>

                <form action="confirmLogin.php" method="post">
                    <div class="form-group">
                        <label for="Email"> Email : </label>
                        <input required type="email" class="form-control" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="Password"> Password : </label>
                        <input required type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>

                    <button type="submit" class="btn btn-primary"> Login </button>
                    <a class="btn btn-link" href="registration.php"> Create new Account </a>
                </form>

            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script type="text/javascript" src="<?php echo $url; ?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>assets/js/bootstrap.min.js"></script>
</body>

</html>