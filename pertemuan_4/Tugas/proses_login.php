<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="intel core" AND $password=="0110122104")
    {
        $_SESSION["username"]=$username;
        header("location:dasboard.php");
    }else{
        header("location:index.php?login_error");
    }
?>