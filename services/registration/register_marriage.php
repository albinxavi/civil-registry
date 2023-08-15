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
    $bride_contry = mysqli_real_escape_string($db, $_POST['bride_contry']);
    $bride_phno = mysqli_real_escape_string($db, $_POST['bride_phno']);
    $bride_email = mysqli_real_escape_string($db, $_POST['bride_email']);

    $bride_groom_name = mysqli_real_escape_string($db, $_POST['bride_groom_name']);
    $bride_groom_dob = mysqli_real_escape_string($db, $_POST['bride_groom_dob']);
    $bride_housename = mysqli_real_escape_string($db, $_POST['bride_housename']);
    $bride_city = mysqli_real_escape_string($db, $_POST['bride_city']);
    $bride_district = mysqli_real_escape_string($db, $_POST['bride_district']);
    $bride_state = mysqli_real_escape_string($db, $_POST['bride_state']);
    $bride_contry = mysqli_real_escape_string($db, $_POST['bride_contry']);
    $bride_phno = mysqli_real_escape_string($db, $_POST['bride_phno']);
    $bride_email = mysqli_real_escape_string($db, $_POST['bride_email']);

    $name = $_FILES['death_document']['name'];
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/uploads/deaths/";
    $target_file = $target_dir . basename($_FILES['death_document']['name']);
    move_uploaded_file($_FILES['death_document']['tmp_name'], $target_dir . $name);
    $sql = "INSERT INTO DEATH_REG (
        user_id, 
        deceased_name, 
        deceased_sex, 
        deceased_age, 
        deceased_housename, 
        deceased_city, 
        deceased_district, 
        deceased_state, 
        deceased_country, 
        deceased_pin, 
        dod, 
        father_name, 
        mother_name, 
        place_of_death, 
        cause_certificate_id, 
        actual_cause, 
        death_document
    ) VALUES (
        '$user_id', 
        '$deceased_name', 
        '$deceased_sex', 
        '$deceased_age', 
        '$deceased_housename', 
        '$deceased_city', 
        '$deceased_district', 
        '$deceased_state', 
        '$deceased_country', 
        '$deceased_pin', 
        '$dod', 
        '$father_name', 
        '$mother_name', 
        '$place_of_death', 
        '$cause_certificate_id', 
        '$actual_cause', 
        '$target_dir.$name'
    );";
    if (mysqli_query($db, $sql)) {
        $args = array(
            'register_death' => 'success'
        );
        header("Location: /home.php?" . http_build_query($args));
    } else {
        $args = array(
            'register_death' => 'failed'
        );
        header("Location: /home.php?" . http_build_query($args));

    }
}
?>