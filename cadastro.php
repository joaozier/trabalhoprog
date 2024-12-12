<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadpol - Cadastro</title>
</head>
<body style="background-image: url('imagens/20241124_115900.jpg'); background-size: cover; background-repeat: no-repeat; background-position: top center; background-attachment:fixed ;">
    <div class="container mt-5 mb-5 w-50 p-4 rounded-3 position-absolute top-50 start-50 translate-middle" style="background-color: rgba(255, 255, 255, 0.575);">
        <div class="row m-3 rounded-3 p-3 shadow" style="background-color: lightgray;">
            <h1>Cadastrar</h1>
        </div>
        <div class="row ms-2 me-2">
            <div class="col m-2 p-3 rounded-3 shadow" style="background-color: lightgrey;">
                <form action="cadastro_script.php" method="POST">
                    <input type="text" class="form-control" name="nome" id="idnome" placeholder="Nome" required><br>
                    <select name="sexo" class="form-select">
                        <option disabled selected>Sexo</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                    </select><br>
                    <fieldset class="rounded-3" style="border: 1px solid grey; padding: 10px 5px 10px 20px;">
                        <label>Partido</label><br>
                        <input type="radio" class="form-check-input" name="partido" id="trabalhista" value="Trabalhista" checked>
                        <label for="trabalhista" class="form-check-label">Trabalhista</label><br>
                        <input type="radio" class="form-check-input" name="partido" id="independente" value="Independente">
                        <label for="independente" class="form-check-label">Independente</label><br>
                        <input type="radio" class="form-check-input" name="partido" id="conservador" value="Conservador">
                        <label for="conservador" class="form-check-label">Conservador</label><br>
                    </fieldset><br>
                    <input type="text" class="form-control" name="estado" id="idestado" placeholder="UF do candidato" maxlength="2" required><br>
                    <input type="number" class="form-control" name="numero" id="idnumero" placeholder="Número do candidato" min="10000" max="99999" required><br>
                    <input type="email" class="form-control" name="email" id="idemail" placeholder="Email" required><br>
                    <input type="password" class="form-control" name="senha" id="idsenha" placeholder="Senha" required><br>
                    <input type="submit" value="Cadastrar" class="btn btn-success">
                </form>
                <br>
                <a href="index.html" class="btn btn-primary">Retornar</a>
            </div>
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