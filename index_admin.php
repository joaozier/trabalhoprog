<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadpol - Login Administrador</title>
</head>

<body style="background-image: url(imagens/20241124_115900.jpg); background-size: cover; background-repeat: no-repeat; background-position: top center; background-attachment: fixed;">
    <div class="container w-50 p-4 rounded-3 position-absolute top-50 start-50 translate-middle" style="background-color: rgba(255, 255, 255, 0.575);">
        <div class="row m-3 rounded-3 p-3 shadow" style="background-color: lightgray;">
            <h1>Olá, administrador!</h1>
        </div>
        <div class="col m-3 p-3 rounded-3 shadow" style="background-color: lightgrey;">
            <h2>Entrar</h2><br>
            <form action="testeLogin_admin.php" method="POST">
                <input type="email" class="form-control" name="email_admin" id="idemail" placeholder="Email" autocomplete="off"><br>
                <input type="password" class="form-control" name="senha_admin" id="idsenha" placeholder="Senha"><br>
                <input type="submit" name="submit" class="btn btn-success" value="Entrar">
            </form>
            <br>
            <a href="index.php" class="btn btn-primary">Login Geral</a>
        </div>
    </div>
</body>

</html>