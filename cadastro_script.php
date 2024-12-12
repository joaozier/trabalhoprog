    <?php
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $partido = $_POST['partido'];
        $estado = $_POST['estado'];
        $numero = $_POST['numero'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = "INSERT INTO `usuarios`(`nome`, `sexo`, `partido`, `estado`, `numero`, `email`, `senha`) VALUES ('$nome','$sexo','$partido','$estado','$numero','$email','$senha')";

        if (mysqli_query($conexao,$result)) {
            header('Location: index.php');
        } else
            echo "Erro";
    ?>