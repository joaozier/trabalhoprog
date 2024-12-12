<?php 
    include_once('conexao.php');

    if (isset($_POST['update'])) {
        $cod_usuario = $_POST['cod_usuario'];
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $partido = $_POST['partido'];
        $estado = $_POST['estado'];
        $numero = $_POST['numero'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE `usuarios` SET `nome`='$nome',`sexo`='$sexo',`partido`='$partido',`estado`='$estado',`numero`='$numero',`email`='$email',`senha`='$senha' WHERE cod_usuario=$cod_usuario";

        $result = $conexao->query($sqlUpdate);
            
    }
    header('Location: home_admin.php')
?>