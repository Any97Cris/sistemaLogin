<?php
include_once 'database.php';

session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false){
    $email = addslashes($_POST['email']);    
    $senha = addslashes($_POST['senha']);
    $cripto = md5($senha);

    $sql = $pdo->query("SELECT * FROM pessoas WHERE email = '$email' AND senha = '$cripto'");

    if($sql->rowCount() > 0){
        $query = $sql->fetch();

        $_SESSION['id'] = $query['id'];

        header("Location: index.php");
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="src/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container"> 
        <h3 class="mt-5">Login</h3>
        <form method="POST" class="mt-5">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" required class="form-control" name="email" placeholder="nome@exemplo.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                <input type="password" required class="form-control" name="senha" id="senhaId" placeholder="******">
                <ion-icon class="mostrarsenha mt-3" name="eye-outline" onclick="mostrarSenha()" size="large"></ion-icon> 
                <label>Mostrar Senha</label>               
            </div>
            <!-- position-absolute top-50 start-50 -->
            <div class="d-grid gap-2 col-6 mx-auto mt-5">
                <input class="btn btn-primary" type="submit" value="Entrar" />
                <a href="cadastrar.php" class="btn btn-info">Cadastrar</a>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="src/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>