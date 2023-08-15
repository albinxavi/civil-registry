<?php
   include($_SERVER['DOCUMENT_ROOT']."/inc/config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = mysqli_real_escape_string($db,$_POST['id']);
      $password = mysqli_real_escape_string($db,$_POST['new_password']);

      $sql = "UPDATE user SET password = '$password' WHERE id = $id";
      if (mysqli_query($db, $sql)) {
         $args = array(
            'reset' => 'success'
        );
        header("Location: /?" . http_build_query($args));
      }else {
        $args = array(
         'reset' => 'failed'
        );
        header("Location: /?" . http_build_query($args));
        
      }
   }
?>