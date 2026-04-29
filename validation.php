<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="validation.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Email:</label>
        <input type="text" name="email">
        <label>Age:</label>
        <input type="number" name="age">
        <button type="submit" name="submit">Log in</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        // echo 0;

        //insecure email
        // $email = $_POST['email'];

        //SANITATION email
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if($username){
            echo $username;
        }else{
            echo "The email provided is invalid";
        }

        // $age = $_POST['age'];

        // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        // if($age){
        //     echo "You are $age years old";
        // }else{
        //     echo "Inavalid age";
        // }
        // echo "Hello {$_POST['username']}";
    }


?>