<?php
function connectBD(){
    $con = mysqli_connect('localhost','root','20104030','blog_db');
    return $con;
}



?>