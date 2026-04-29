<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="forms.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Password:</label>
        <input type="password" name="password">
        <button type="submit">Log in</button>
    </form>
</body>

</html>


<?php
echo "Welcome, {$_POST['username']}, your password is {$_POST['password']}";

?>