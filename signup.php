<?php

include('database.php');

$passkey = 'fola';
$pass = password_hash($passkey, PASSWORD_DEFAULT);

$connection = mysqli_connect($host, $username, $password, $database);

// $query = "INSERT INTO users_tb(username, password) VALUES('Fola', '$pass')";
// mysqli_query($connection, $query);




//display one user/entity

// $query = "SELECT * FROM users_tb WHERE username = 'Lola'";
// $result = mysqli_query($connection, $query);
// print_r($result);
// if(mysqli_num_rows($result) > 0){
//     $row = mysqli_fetch_assoc($result);
//     // print_r($row['username']);
//     foreach($row as $key=>$value){
//         // print_r("{$key}: {$value} <br>");
//         echo "{$key}: {$value} <br>";
//     }
// }else{
//     echo 'User not fund';
// }


//display more than one user/entity

$query = "SELECT * FROM users_tb";
$result = mysqli_query($connection, $query);
// print_r($result);
if(mysqli_num_rows($result) > 0){
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);
    while($row = mysqli_fetch_assoc($result)){
        // print_r($row);

        foreach($row as $key => $value){
            print_r("{$key}: {$value} <br>");
        }
    }
}else{
    echo "No user exist";
}


?>