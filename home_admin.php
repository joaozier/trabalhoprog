<?php
session_start();
include_once('conexao.php');
if ((!isset($_SESSION['email_admin']) == true) and (!isset($_SESSION['senha_admin']) == true)) {
    unset($_SESSION['email_admin']);
    unset($_SESSION['senha_admin']);
    header('Location: index_admin.php');
} else
    $logado = $_SESSION['email_admin'];

$sql = "SELECT * FROM usuarios ORDER BY cod_usuario DESC";

$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadpol - Administrador</title>
</head>

<body style="background-image: url('imagens/20241124_115900.jpg'); background-size: cover; background-repeat: no-repeat; background-position: top center; background-attachment:fixed ;">
    <div class="container mt-5 mb-5 w-75 p-4 rounded-3 position-absolute top-50 start-50 translate-middle" style="background-color: rgba(255, 255, 255, 0.575);">
        <div class="row m-3 rounded-3 p-3 shadow" style="background-color: lightgray;">
            <div class="col">
                <h2>Administrador</h2>
            </div>
            <div class="col">
                <a href="sair_admin.php" class="btn btn-danger">Sair</a>
            </div>
        </div>
        <div class="row m-3 p-3 rounded-3 shadow" style="background-color: lightgrey;">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Partido</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Número</th>
                        <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['nome'] . "</td>";
                        echo "<td>" . $user_data['sexo'] . "</td>";
                        echo "<td>" . $user_data['partido'] . "</td>";
                        echo "<td>" . $user_data['estado'] . "</td>";
                        echo "<td>" . $user_data['numero'] . "</td>";
                        echo "<td>
                                <a href='edit.php?cod_usuario=$user_data[cod_usuario]' class='btn btn-primary btn-sm'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
</svg></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
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