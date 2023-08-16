<?php
include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 

   $email = mysqli_real_escape_string($db, $_POST['email']);
   $password = mysqli_real_escape_string($db, $_POST['password']);

   $sql = "SELECT * FROM USER WHERE email = '$email' and password = '$password'";
   $result = mysqli_query($db, $sql);
   if (mysqli_num_rows($result) == 1)
   // If result matched $myusername and $mypassword, table row must be 1 row
   {
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $_SESSION['login_user'] = $email;
      $_SESSION['admin'] = $row['admin'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['name'];
      if ($_SESSION['admin'] == 0) {
         header("location: /home.php");
      } elseif ($_SESSION['admin'] == 1) {
         header("location: /admin_home.php");
      }
   } else {
      $args = array(
         'login' => 'failed'
      );
      header("Location: /?" . http_build_query($args));

   }
}
?>