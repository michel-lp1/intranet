<?php

if(isset($_POST['submit']))
{
   // print_r($_POST['nome']); //print_r('<br>'); //print_r($_POST['email']); //print_r('<br>'); //print_r($_POST['contato']);//print_r('<br>');    //print_r($_POST['telefone']);    //print_r('<br>');    //print_r($_POST['tms']);    //print_r('<br>');    //print_r($_POST'condicao']);    //print_r('<br>');    //print_r($_POST['data_integrada']);

    include_once('../controllers/config.php');


    $nome =             $_POST['nome'];
    $email =            $_POST['email'];
    $senha=             $_POST['senha'];
    $resumo = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    header("Location: ../pagina-acesso.php");
    echo "Dados gravados com sucesso";
    
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pagina-formulario.css">
    <title>Formulario | Usuarios</title>
</head>
<body>
<div class="box">
        <form action="formulario-usuarios.php" method="POST" >
            <fieldset>
                <legend>Formulário | Usuários</legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labeLInput">Nome completo:</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    
                </div>  
                <br><br>     
                <div class="inputBox">
                    <label for="email"class="labeLInput">E-mail válido:</label>
                    <input type="email" name="email" id="email" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labeLInput">Senha:</label>
                    <input type="password" name="senha" id="senha" class="inputUser"  maxlength="6" required>
                    
                </div>
                <br><br>
                <input type="submit" name="submit" value="Enviar" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>