<?php
   include($_SERVER['DOCUMENT_ROOT']."/inc/config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $user_id = mysqli_real_escape_string($db,$_POST['user_id']);
      $dob = mysqli_real_escape_string($db,$_POST['dob']);
      $child_name = mysqli_real_escape_string($db,$_POST['child_name']);
      $child_sex = mysqli_real_escape_string($db,$_POST['child_sex']);
      $place_of_birth = mysqli_real_escape_string($db,$_POST['place_of_birth']);
      $birth_weight = mysqli_real_escape_string($db,$_POST['birth_weight']);
      $mother_name = mysqli_real_escape_string($db,$_POST['mother_name']);
      $mother_age = mysqli_real_escape_string($db,$_POST['mother_age']);
      $father_name = mysqli_real_escape_string($db,$_POST['father_name']);
      $father_age = mysqli_real_escape_string($db,$_POST['father_age']);
      $birth_housename = mysqli_real_escape_string($db,$_POST['birth_housename']);
      $birth_city = mysqli_real_escape_string($db,$_POST['birth_city']);
      $birth_district = mysqli_real_escape_string($db,$_POST['birth_district']);
      $birth_state = mysqli_real_escape_string($db,$_POST['birth_state']);
      $delivery_method = mysqli_real_escape_string($db,$_POST['delivery_method']);
      $name = $_FILES['birth_proof']['name'];
      $base_dir = "/uploads/births/";
      $target_dir = $_SERVER['DOCUMENT_ROOT'] . $base_dir;
      $t = time();
      $target_file = $target_dir . $t . "_birth_proof_" . $name;
      $web_location = $base_dir . $t . "_birth_proof_" . $name;
      move_uploaded_file($_FILES['birth_proof']['tmp_name'], $target_file);
      $sql = "INSERT into birth_reg (user_id, dob, child_name, child_sex, place_of_birth, birth_weight, mother_name, mother_age, father_name, father_age, birth_housename, birth_city, birth_district, birth_state, delivery_method, birth_proof) VALUES ('$user_id', '$dob', '$child_name', '$child_sex', '$place_of_birth', '$birth_weight', '$mother_name', '$mother_age', '$father_name', '$father_age', '$birth_housename', '$birth_city', '$birth_district', '$birth_state', '$delivery_method', '$web_location')";
      if (mysqli_query($db, $sql)) {
         $args = array(
            'register_birth' => 'success'
        );
        header("Location: /home.php?" . http_build_query($args));
      }else {
        $args = array(
         'register_birth' => 'failed'
        );
        header("Location: /home.php?" . http_build_query($args));
        
      }
   }
?>