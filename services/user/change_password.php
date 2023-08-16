<?php
   include($_SERVER['DOCUMENT_ROOT']."/inc/config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $id = mysqli_real_escape_string($db,$_SESSION['id']);
      $old_password = mysqli_real_escape_string($db,$_POST['old_password']);
      $sql = "SELECT * FROM user WHERE id = '$id' and password = '$old_password'";
      $result = mysqli_query($db,$sql);
      if (mysqli_num_rows($result)==1)
      {
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $id = $row['id'];
         $args = array(
            'email' => $email,
            'id' => $id,
            'chnage_password' => 'success'
        );
        header("Location: /password_reset.php?" . http_build_query($args));
      }else {
        $args = array(
            'change_password' => 'failed'
        );
        header("Location: /password_change.php?" . http_build_query($args));
        
      }
   }
?>