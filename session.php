<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <button name="submit">Submit</button>
    </form>
</body>
</html>

<?php
session_start();

if(isset($_POST['submit'])){
    if(!empty($_POST['username'])){
        $_SESSION['username'] = $_POST['username'];
        echo $_SESSION['username'];

        header("Location: index.php");

    }
}


?>