<?php

include_once 'database.php';

session_start();

if(!(isset($_SESSION['id']) && empty($_SESSION['id']) == false)){
    header("Location: login.php");
    exit;
}

$email = '';
$codigo = '';
$sql = "SELECT email, codigo FROM pessoas WHERE id = '".addslashes($_SESSION['id'])."'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    $info = $sql->fetch();
    $email = $info['email'];
    $codigo = $info['codigo'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    
    

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>            
            <li class="nav-item btnLogout">
                <form method="POST" action="logout.php">
                    <input type="submit" class="btn btn-secondary" value="SAIR" />
                </form>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="container">
    <img src="src/img/welcome-greetings.gif" alt="welcome_gif" class="rounded mx-auto d-block mt-5 mb-5">
    <p class="text-center">Link: http://localhost/aulas/phpintermediario/registroConvite/cadastrar.php?codigo=<?php echo $codigo;?></p>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>