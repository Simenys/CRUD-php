<?php
    // connect to database
    $db['db_host'] = 'localhost';
    $db['db_user'] = 'root';
    $db['db_pass'] = '';
    $db['db_name'] = 'CRUD-php';
    
    foreach($db as $key => $value) {
        define(strtoupper($key), $value);
    }

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
    if(!$conn) {
        die("Not connected to MySQL" . mysqli_connect_error($conn));
    }
?>