<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="isset.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <button name="submit">Submit</button>
    </form>
</body>

</html>

<?php
//isset returns true if the variable is defined and false if not defined or null.
//empty return true if the variable is not defined and false if it is defined

// $username = ;

if (isset($_POST['submit'])) {
    if (empty($_POST['username'])) {
        echo 'username is not defined';
    } else {
        echo "Username: {$_POST['username']}";
    }
}


?>