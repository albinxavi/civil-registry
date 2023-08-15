<?php
   include($_SERVER['DOCUMENT_ROOT']."/inc/config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $phone = mysqli_real_escape_string($db,$_POST['password']);
      $security_question = mysqli_real_escape_string($db,$_POST['security_qn']);
      $security_answer = mysqli_real_escape_string($db,$_POST['security_answer']);

      $sql = "INSERT into user (email, password, name, phone, security_qn, security_answer) VALUES ('$email', '$password', '$name', '$phone','$security_question','$security_answer')";
      if (mysqli_query($db, $sql)) {
         $args = array(
            'register' => 'success'
        );
        header("Location: /?" . http_build_query($args));
      }else {
        $args = array(
         'register' => 'failed'
        );
        header("Location: /?" . http_build_query($args));
        
      }
   }
?>