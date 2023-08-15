<?php
   include($_SERVER['DOCUMENT_ROOT']."/inc/config.php");
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $result = mysqli_query($db,"select * from USER where email = '$user_check' ");
   if (mysqli_num_rows($result) != 1)
   {
      header("location: /services/user/logout.php");
      die();
   }
   if(!isset($_SESSION['login_user'])){
      header("location: /");
      die();
   }
?>