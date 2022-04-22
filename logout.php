<?php
session_start();
unset($_SESSION["password"]);
if(session_destroy()) {
    echo "<script>alert('You will automatically be redirected')</script>";
header("Refresh: 1; login.php"); //will redirect after 3 seconds 
}
?>