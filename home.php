<?php 
    session_start();
    if ((!isset($_SESSION['email'])==true)and (!isset($_SESSION['senha'])==true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    } else
        $logado=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadpol - Página Inicial</title>
</head>
<body style="background-image: url('imagens/20241124_115900.jpg'); background-size: cover; background-repeat: no-repeat; background-position: top center; background-attachment:fixed ;">
    <div class="container mt-5 mb-5 w-50 p-4 rounded-3 position-absolute top-50 start-50 translate-middle" style="background-color: rgba(255, 255, 255, 0.575);">
        <div class="row m-3 rounded-3 p-3 shadow" style="background-color: lightgray;">
            <?php 
                echo "Olá";
            ?>
            <a href="sair.php" class="btn btn-danger">Sair</a>
        </div>
        <div class="row ms-2 me-2">
        </div>
    </div>
    <!-- <section>
        // include "conexao.php";

        // $nome = $_POST['nome'];
        // $sexo = $_POST['sexo'];
        // $partido = $_POST['partido'];
        // $estado = $_POST['estado'];
        // $numero = $_POST['numero'];
        // $email = $_POST['email'];
        // $senha = $_POST['senha'];

        // $result = mysqli_query($conexao,"INSERT INTO `usuarios`(`nome`, `sexo`, `partido`, `estado`, `numero`, `email`, `senha`) VALUES ('$nome','$sexo','$partido','$estado','$numero','$email','$senha')");

        // mysqli_query($conexao,$result);
    </section> -->
</body>
</html>