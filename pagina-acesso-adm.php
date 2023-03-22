<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pagina-acesso.css">
    <script src="js/mascara_cpf.js"></script>
    <title>Tela de Login</title>
</head>
<body>
    <div class="tela-login">
        <form method="POST" action="controllers/login-acesso-adm.php">
        <h1>Acessar ADM</h1>
        <input type="text" placeholder="cpf apenas numeros" id="cpf" name="cpf" autocomplete="off" onkeyup="mascara_cpf()" maxlength="14">
        <br><br>
        <input type="password" placeholder="Senha" id="senha" name="senha" autocomplete="off" maxlength="6">
        <br><br>
        <input type="submit" name="submit" value="Enviar" class="inputSubmit"><br><br>
        </form>
        <a href="../../../index.php"><img src="img/figuras-icons/home-ico.png"></a>
    </div>
</body>
</html>