<?php

include_once 'database.php';

session_start();

if(!(isset($_SESSION['id']) && empty($_SESSION['id']) == false)){
    header("Location: login.php");
}else{
    echo "Hello";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h2>Bem vindo a página Inicial</h2>
</body>
</html>