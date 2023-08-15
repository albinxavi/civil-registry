<?php
   include($_SERVER['DOCUMENT_ROOT']."/inc/config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $security_qn = mysqli_real_escape_string($db,$_POST['security_qn']);
      $security_answer = mysqli_real_escape_string($db,$_POST['security_answer']);
      $sql = "SELECT * FROM USER WHERE email = '$email' and security_qn = '$security_qn' and security_answer = '$security_answer'";
      $result = mysqli_query($db,$sql);
      if (mysqli_num_rows($result)==1)
      {
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $id = $row['id'];
         $args = array(
            'email' => $email,
            'id' => $id,
            'forgot_password' => 'success'
        );
        header("Location: /password_reset.php?" . http_build_query($args));
      }else {
        $args = array(
            'forgot_password' => 'failed'
        );
        header("Location: /password_forgot.php?" . http_build_query($args));
        
      }
   }
?>