<?php 

  session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: users/login.php");
    }

include('/include/header.php'); 

?>



<?php // include('/include/footer.php'); ?>
