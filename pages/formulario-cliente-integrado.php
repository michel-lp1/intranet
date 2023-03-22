<?php

if(isset($_POST['submit']))
{
   // print_r($_POST['nome']); //print_r('<br>'); //print_r($_POST['email']); //print_r('<br>'); //print_r($_POST['contato']);//print_r('<br>');    //print_r($_POST['telefone']);    //print_r('<br>');    //print_r($_POST['tms']);    //print_r('<br>');    //print_r($_POST'condicao']);    //print_r('<br>');    //print_r($_POST['data_integrada']);

    include_once('../controllers/config.php');

    $id =               $_POST['id'];
    $nome =             $_POST['nome'];
    $email =            $_POST['email'];
    $contato =          $_POST['contato'];
    $telefone =         $_POST['telefone'];
    $tms =              $_POST['tms'];
    $condicao =         $_POST['condicao'];
    $data_integrada =   $_POST['data_integrada'];


    $resumo = mysqli_query($conexao, "INSERT INTO clientes (nome, email, contato, telefone, tms, condicao, data_integrada) VALUES ('$nome', '$email', '$contato', '$telefone', '$tms', '$condicao', '$data_integrada')");

    header("Location: formulario-cliente-integrado.php");
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
    <title>Formulário | Clientes Integrados...</title>
</head>
<body>
    <div class="box">
        <form class="form-control" action="formulario-cliente-integrado.php" method="POST" >
            <fieldset>
                <legend>Formulário | Clientes Integrados</legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labeLInput">Cliente Integrado:</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    
                </div>  
                <br><br>     
                <div class="inputBox">
                    <label for="email"class="labeLInput">E-mail válido:</label>
                    <input type="email" name="email" id="email" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="contato" class="labeLInput">Contato:</label>
                    <input type="text" name="contato" id="contato" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone"class="labeLInput">Telefone (WhatsApp):</label>
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    
                </div>
                <br>
                <div class="inputBox">
                    <label for="tms" class="labeLInput">Qual é o TMS?:</label>
                    <input type="text" name="tms" id="tms" class="inputUser"  required>
                </div>  
                <br>      
                <p class="labeLInput">Condição:</p>
                <input type="radio" id="ativo" name="condicao" value="ativo" required>
                <label for="ativo">Integração Ativa</label>
                <br>
                <input type="radio" id="inativo" name="condicao" value="inativo" required>
                <label for="inativo">Integração Inativa</label>
                <br>
                <input type="radio" id="declinou" name="condicao" value="declinou" required>
                <label for="declinou">Cliente Declinou</label>
                <br><br>
                    <label for="data_integrada" class="labeLInput">Integrado em: &nbsp; </label>
                    <input type="date" name="data_integrada" id="data_integrada" required>
                <br><br>
                <input type="submit" name="submit" value="Enviar" id="submit">
            </fieldset>
        </form>
        <a href="../../../index.php" class="link-home"><img class="img-home" src="../img/figuras-icons/home.png"></a>
        <a href="../index-adm.php" class="link-home"><img class="img-home" src="../img/figuras-icons/btn-voltar.png"></a>
    </div>
    
</body>
</html>