<?php
    $host ='localhost';
    $username = 'root';
    $password = '';
    $database = 'march_db';

    $connection = '';

    
    try {
        $connection = mysqli_connect($host, $username, $password, $database);
        // echo 'connected successfully';
        
    } catch (mysqli_sql_exception) {
        echo 'connection error';
    }

    // if($connection){
    // }


?>