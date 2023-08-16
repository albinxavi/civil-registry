<?php
include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $date_of_marriage = mysqli_real_escape_string($db, $_POST['date_of_marriage']);

    $bride_name = mysqli_real_escape_string($db, $_POST['bride_name']);
    $bride_dob = mysqli_real_escape_string($db, $_POST['bride_dob']);
    $bride_housename = mysqli_real_escape_string($db, $_POST['bride_housename']);
    $bride_city = mysqli_real_escape_string($db, $_POST['bride_city']);
    $bride_district = mysqli_real_escape_string($db, $_POST['bride_district']);
    $bride_state = mysqli_real_escape_string($db, $_POST['bride_state']);
    $bride_phno = mysqli_real_escape_string($db, $_POST['bride_phno']);
    $bride_email = mysqli_real_escape_string($db, $_POST['bride_email']);

    $bride_groom_name = mysqli_real_escape_string($db, $_POST['bride_groom_name']);
    $bride_groom_dob = mysqli_real_escape_string($db, $_POST['bride_groom_dob']);
    $bride_groom_housename = mysqli_real_escape_string($db, $_POST['bride_groom_housename']);
    $bride_groom_city = mysqli_real_escape_string($db, $_POST['bride_groom_city']);
    $bride_groom_district = mysqli_real_escape_string($db, $_POST['bride_groom_district']);
    $bride_groom_state = mysqli_real_escape_string($db, $_POST['bride_groom_state']);
    $bride_groom_phno = mysqli_real_escape_string($db, $_POST['bride_groom_phno']);
    $bride_groom_email = mysqli_real_escape_string($db, $_POST['bride_groom_email']);

    $base_dir = "/uploads/marriages/";
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . $base_dir;

    $bride_signature_file_name = $_FILES['bride_signature']['name'];
    $t = time();
    $bride_signature_target_file = $target_dir . $t . "_bride_signature_" . $bride_signature_file_name;
    $bride_signature_web_location = $base_dir . $t . "_bride_signature_" . $bride_signature_file_name;
    move_uploaded_file($_FILES['bride_signature']['tmp_name'], $bride_signature_target_file);

    $bride_photo_file_name = $_FILES['bride_photo']['name'];
    $t = time();
    $bride_photo_target_file = $target_dir . $t . "_bride_photo_" . $bride_photo_file_name;
    $bride_photo_web_location = $base_dir . $t . "_bride_photo_" . $bride_photo_file_name;
    move_uploaded_file($_FILES['bride_photo']['tmp_name'], $bride_photo_target_file);

    $bride_groom_signature_file_name = $_FILES['bride_groom_signature']['name'];
    $t = time();
    $bride_groom_signature_target_file = $target_dir . $t . "_bride_groom_signature_" . $bride_groom_signature_file_name;
    $bride_groom_signature_web_location = $base_dir . $t . "_bride_groom_signature_" . $bride_groom_signature_file_name;
    move_uploaded_file($_FILES['bride_groom_signature']['tmp_name'], $bride_groom_signature_target_file);

    $bride_groom_photo_file_name = $_FILES['bride_groom_photo']['name'];
    $t = time();
    $bride_groom_photo_target_file = $target_dir . $t . "_bride_groom_photo_" . $bride_groom_photo_file_name;
    $bride_groom_signature_web_location = $base_dir . $t . "_bride_groom_photo_" . $bride_groom_photo_file_name;
    move_uploaded_file($_FILES['bride_groom_photo']['tmp_name'], $bride_groom_photo_target_file);

    $proof_file_name = $_FILES['proof']['name'];
    $t = time();
    $proof_target_file = $target_dir . $t . "_proof_" . $proof_file_name;
    $proof_web_location = $base_dir . $t . "_proof_" . $proof_file_name;
    move_uploaded_file($_FILES['proof']['tmp_name'], $proof_target_file);
    
    $sql = "INSERT INTO marriage_reg (
        user_id,
        date_of_marriage, 
        bride_name, 
        bride_dob, 
        bride_housename, 
        bride_city, 
        bride_district, 
        bride_state, 
        bride_phno, 
        bride_email,
        bride_signature,
        bride_photo,
        bride_groom_name, 
        bride_groom_dob, 
        bride_groom_housename, 
        bride_groom_city, 
        bride_groom_district, 
        bride_groom_state, 
        bride_groom_phno, 
        bride_groom_email,
        bride_groom_signature,
        bride_groom_photo,
        proof
    ) VALUES (
        '$user_id', 
        '$date_of_marriage', 
        '$bride_name', 
        '$bride_dob', 
        '$bride_housename', 
        '$bride_city', 
        '$bride_district', 
        '$bride_state', 
        '$bride_phno', 
        '$bride_email',
        '$bride_signature_web_location',
        '$bride_photo_web_location',
        '$bride_groom_name', 
        '$bride_groom_dob', 
        '$bride_groom_housename', 
        '$bride_groom_city', 
        '$bride_groom_district', 
        '$bride_groom_state', 
        '$bride_groom_phno', 
        '$bride_groom_email',
        '$bride_groom_signature_web_location',
        '$bride_groom_photo_web_location',
        '$proof_web_location'
    );";
    if (mysqli_query($db, $sql)) {
        $args = array(
            'register_marriage' => 'success'
        );
        header("Location: /message.php?" . http_build_query($args));
    } else {
        $args = array(
            'register_marriage' => 'failed'
        );
        header("Location: /home.php?" . http_build_query($args));

    }
}
?>