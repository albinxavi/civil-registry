<?php
   define('DB_SERVER', '127.0.0.1:3306');
   define('DB_USERNAME', 'admin');
   define('DB_PASSWORD', 'admin123');
   define('DB_DATABASE', 'application_db');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>