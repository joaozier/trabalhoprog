<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadpol - Login</title>
</head>
<body style="background-image: url(imagens/20241124_115900.jpg); background-size: cover; background-repeat: no-repeat; background-position: top center; background-attachment: fixed;">
    <div class="d-flex justify-content-center">
        <h1 style="font-family: 'Courier New', Courier, monospace;">Cadpol</h1>
    </div>
    <div class="container p-4 rounded-3 position-absolute top-50 start-50 translate-middle" style="background-color: rgba(255, 255, 255, 0.575);">
        <div class="row m-3 rounded-3 p-3 shadow" style="background-color: lightgray;">
            <h1>Olá! Seja bem-vindo(a).</h1>
        </div>
        <div class="row ms-2 me-2">

            <div class="col m-2 p-3 rounded-3 shadow" style="background-color: lightgrey;">
                <h2 class="text-center">Entrar</h2><br>
                <form action="testeLogin.php" method="POST" class="d-flex flex-column align-items-center">
                    <input type="email" class="form-control mb-3" name="email" id="idemail" placeholder="Email" style="max-width: 300px;">
                    <input type="password" class="form-control mb-3" name="senha" id="idsenha" placeholder="Senha" style="max-width: 300px;">
                    <input type="submit" name="submit" class="btn btn-success" value="Entrar">
                </form>
            </div>

            <div class="col m-2 p-3 rounded-3 shadow" style="background-color: lightgrey;">
                <h2 class="text-center">Cadastro de candidato</h2><br>
                <div class="d-flex justify-content-center">
                    <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadpol - Login</title>
</head>
<body style="background-image: url(imagens/20241124_115900.jpg); background-size: cover; background-repeat: no-repeat; background-position: top center; background-attachment: fixed;">
    <div class="container p-4 rounded-3 position-absolute top-50 start-50 translate-middle" style="background-color: rgba(255, 255, 255, 0.575);">
        <div class="row m-3 rounded-3 p-3 shadow" style="background-color: lightgray;">
            <h1>Olá! Seja bem vindo(a)</h1>
        </div>
        <div class="row ms-2 me-2">
            <div class="col m-2 p-3 rounded-3 shadow" style="background-color: lightgrey;">
                <h2>Entrar</h2><br>
                <form action="testeLogin.php" method="POST">
                    <input type="email" class="form-control" name="email" id="idemail" placeholder="Email"><br>
                    <input type="password" class="form-control" name="senha" id="idsenha" placeholder="Senha"><br>
                    <input type="submit" name="submit" class="btn btn-success" value="Entrar">
                </form>
            </div>
            <div class="col m-2 p-3 rounded-3 shadow" style="background-color: lightgrey;">
                <h2>Cadastro de candidato</h2><br>
                <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
            </div>
        </div>
    </div>
</body>
</html> -->