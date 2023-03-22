<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pagina-acesso.css">
    <title>Tela de Login</title>
</head>
<body>
    <div class="tela-login">
        <form method="POST" action="controllers/login-acesso.php">
        <h1>Login</h1>
        <input type="email" placeholder="E-mail válido" id="email" name="email" autocomplete="off">
        <br><br>
        <input type="password" placeholder="Senha" id="senha" name="senha" autocomplete="off" maxlength="6">
        <br><br>
        <input type="submit" name="submit" value="Enviar" class="inputSubmit"><br><br>
        </form>
        <a href="pages/formulario-usuarios.php"><button>Não tem cadastro clique Aqui!!!</button></a>
    </div>
</body>
</html>