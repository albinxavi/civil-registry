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
    $bride_country = mysqli_real_escape_string($db, $_POST['bride_country']);
    $bride_phno = mysqli_real_escape_string($db, $_POST['bride_phno']);
    $bride_email = mysqli_real_escape_string($db, $_POST['bride_email']);

    $bride_groom_name = mysqli_real_escape_string($db, $_POST['bride_groom_name']);
    $bride_groom_dob = mysqli_real_escape_string($db, $_POST['bride_groom_dob']);
    $bride_groom_housename = mysqli_real_escape_string($db, $_POST['bride_groom_housename']);
    $bride_groom_city = mysqli_real_escape_string($db, $_POST['bride_groom_city']);
    $bride_groom_district = mysqli_real_escape_string($db, $_POST['bride_groom_district']);
    $bride_groom_state = mysqli_real_escape_string($db, $_POST['bride_groom_state']);
    $bride_groom_country = mysqli_real_escape_string($db, $_POST['bride_groom_country']);
    $bride_groom_phno = mysqli_real_escape_string($db, $_POST['bride_groom_phno']);
    $bride_groom_email = mysqli_real_escape_string($db, $_POST['bride_groom_email']);

    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/uploads/marriages/";

    $bride_signature_file_name = $_FILES['bride_signature']['name'];
    $bride_signature_target_file = $target_dir . time() . $bride_signature_file_name;
    move_uploaded_file($_FILES['bride_signature']['tmp_name'], $bride_signature_target_file);

    $bride_photo_file_name = $_FILES['bride_photo']['name'];
    $bride_photo_target_file = $target_dir . time() . "_bride_photo_" . $bride_photo_file_name;
    move_uploaded_file($_FILES['bride_photo']['tmp_name'], $bride_photo_target_file);

    $bride_groom_signature_file_name = $_FILES['bride_groom_signature']['name'];
    $bride_groom_signature_target_file = $target_dir . time() . "_bride_groom_signature_" . $bride_groom_signature_file_name;
    move_uploaded_file($_FILES['bride_groom_signature']['tmp_name'], $bride_groom_signature_target_file);

    $bride_groom_photo_file_name = $_FILES['bride_groom_photo']['name'];
    $bride_groom_photo_target_file = $target_dir . time() . "_bride_groom_photo_" . $bride_groom_photo_file_name;
    move_uploaded_file($_FILES['bride_groom_photo']['tmp_name'], $bride_groom_photo_target_file);
    
    $sql = "INSERT INTO marriage_reg (
        user_id,
        date_of_marriage, 
        bride_name, 
        bride_dob, 
        bride_housename, 
        bride_city, 
        bride_district, 
        bride_state, 
        bride_country, 
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
        bride_groom_country, 
        bride_groom_phno, 
        bride_groom_email,
        bride_groom_signature,
        bride_groom_photo
    ) VALUES (
        '$user_id', 
        '$date_of_marriage', 
        '$bride_name', 
        '$bride_dob', 
        '$bride_housename', 
        '$bride_city', 
        '$bride_district', 
        '$bride_state', 
        '$bride_country', 
        '$bride_phno', 
        '$bride_email',
        '$bride_signature_target_file',
        '$bride_photo_target_file',
        '$bride_groom_name', 
        '$bride_groom_dob', 
        '$bride_groom_housename', 
        '$bride_groom_city', 
        '$bride_groom_district', 
        '$bride_groom_state', 
        '$bride_groom_country', 
        '$bride_groom_phno', 
        '$bride_groom_email',
        '$bride_groom_signature_target_file',
        '$bride_groom_photo_target_file'
    );";
    if (mysqli_query($db, $sql)) {
        $args = array(
            'register_marriage' => 'success'
        );
        header("Location: /home.php?" . http_build_query($args));
    } else {
        $args = array(
            'register_marriage' => 'failed'
        );
        header("Location: /home.php?" . http_build_query($args));

    }
}
?>