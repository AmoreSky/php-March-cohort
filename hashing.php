<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hashing.php" method="post">
        <label>Password:</label>
        <input type="password" name="password">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $password = $_POST['password'];
    // echo $password;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    if(password_verify('Lola1234', $hashedPassword)){
        echo "user verified";
    }else{
        echo 'incorrect credentials';
    }
}
// $password = 'Lola1234';


// // echo $hashedPassword;


?>