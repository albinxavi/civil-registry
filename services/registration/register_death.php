<?php
include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $deceased_name = mysqli_real_escape_string($db, $_POST['deceased_name']);
    $deceased_sex = mysqli_real_escape_string($db, $_POST['deceased_sex']);
    $deceased_age = mysqli_real_escape_string($db, $_POST['deceased_age']);
    $deceased_housename = mysqli_real_escape_string($db, $_POST['deceased_housename']);
    $deceased_city = mysqli_real_escape_string($db, $_POST['deceased_city']);
    $deceased_district = mysqli_real_escape_string($db, $_POST['deceased_district']);
    $deceased_state = mysqli_real_escape_string($db, $_POST['deceased_state']);
    $deceased_country = mysqli_real_escape_string($db, $_POST['deceased_country']);
    $deceased_pin = mysqli_real_escape_string($db, $_POST['deceased_pin']);
    $father_name = mysqli_real_escape_string($db, $_POST['father_name']);
    $mother_name = mysqli_real_escape_string($db, $_POST['mother_name']);
    $place_of_death = mysqli_real_escape_string($db, $_POST['place_of_death']);
    $cause_certificate_id = mysqli_real_escape_string($db, $_POST['cause_certificate_id']);
    $actual_cause = mysqli_real_escape_string($db, $_POST['actual_cause']);
    $name = $_FILES['death_document']['name'];
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/uploads/deaths/";
    $target_file = $target_dir . time() . "_death_document_" . $name;
    move_uploaded_file($_FILES['death_document']['tmp_name'], $target_file);
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
        '$target_file'
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