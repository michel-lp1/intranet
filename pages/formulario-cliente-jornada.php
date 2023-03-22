<?php

if(isset($_POST['submit']))
{
   

    include_once('../controllers/config.php');


    $nome =             $_POST['nome'];
    $telefone =         $_POST['telefone'];
    $contato =          $_POST['contato'];
    $email =            $_POST['email'];


    $resumo = mysqli_query($conexao, "INSERT INTO controle_jornada (nome, telefone, contato, email) VALUES ('$nome', '$telefone', '$contato', '$email')");

    header("Location: formulario-cliente-jornada.php");
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
    <title>Formulário | Krona Controle de Jornada...</title>
</head>
<body>
    <div class="box">
        <form action="formulario-cliente-jornada.php" method="POST" >
            <fieldset>
                <legend>Formulário | Clientes Controle de Jornada</legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labeLInput">Cliente de Controle de Jornada:</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    
                </div>  
                <br><br>     
                <div class="inputBox">
                    <label for="telefone"class="labeLInput">Telefone:</label>
                    <input type="telefone" name="telefone" id="telefone" class="inputUser" required>
                </div>      
                <br><br>
                
                <div class="inputBox">
                    <label for="contato" class="labeLInput">Contato:</label>
                    <input type="text" name="contato" id="contato" class="inputUser" required>
                </div>
                <br><br>
                
                <div class="inputBox">
                    <label for="email" class="labeLInput">E-mail válido:</label>
                    <input type="text" name="email" id="email" class="inputUser" required>
                    
                </div>    
                <input type="submit" name="submit" value="Enviar" id="submit">
            </fieldset>
        </form>
        <a href="../../../index.php" class="link-home"><img class="img-home" src="../img/figuras-icons/home.png"></a>
        <a href="../index-adm.php" class="link-home"><img class="img-home" src="../img/figuras-icons/btn-voltar.png"></a>
    </div>
    
</body>
</html>