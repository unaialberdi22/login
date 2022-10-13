<?php
$user = $_GET['user'];
$pass = $_GET['pass'];

if($user=="plaiaundi" && $pass=="1234"){
    echo "user y pass correctos";
    session_start();
    $_SESSION['user']=$user;
    header("Location: dashboard.php");
}else{
    header("Location: loginform.php");
}
?>