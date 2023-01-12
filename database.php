<?php

$dsn = "mysql:dbname=contatos;host=127.0.0.1";
$dbuser = "root";
$dbpassword = "";


try{
    $pdo = new PDO($dsn,$dbuser,$dbpassword);

}catch(PDOException $e){
    echo "Erro $e->getMessage()";
}

?>