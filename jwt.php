<?php

require __DIR__ . '/vendor/autoload.php';

use Firebase\JWT\JWT;
use Dotenv\Dotenv;



$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$key = $_ENV['key'];

$payload  = [
    'user_id' => 12,
    'email' => 'test@example.com',
    'role' => 'user',
    'iat' => time(),
    'exp' => time() + 3600,
];

$jwt = JWT::encode($payload, $key, 'HS256');
// echo $jwt;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

<script type="module">
    import {
        jwtDecode
    } from 'https://cdn.jsdelivr.net/npm/jwt-decode@4.0.0/build/esm/index.js';


    let token = <?php echo json_encode($jwt); ?>;
    token = jwtDecode(token);
    console.log(token);

    console.log(token.user_id)
</script>

</html>