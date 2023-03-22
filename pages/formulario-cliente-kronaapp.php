<?php

if(isset($_POST['submit']))
{
   // print_r($_POST['nome']); //print_r('<br>'); //print_r($_POST['email']); //print_r('<br>'); //print_r($_POST['contato']);//print_r('<br>');    //print_r($_POST['telefone']);    //print_r('<br>');    //print_r($_POST['tms']);    //print_r('<br>');    //print_r($_POST'condicao']);    //print_r('<br>');    //print_r($_POST['data_integrada']);

    include_once('../controllers/config.php');


    $cliente =        $_POST['cliente'];
    $emailacesso =    $_POST['emailacesso'];
    


    $resumo = mysqli_query($conexao, "INSERT INTO kronaapp (cliente, emailacesso) VALUES ('$cliente', '$emailacesso')");

    header("Location: formulario-cliente-kronaapp.php");
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
    <title>Formulário | KronaApp...</title>
</head>
<body>
    <div class="box">
        <form action="formulario-cliente-kronaapp.php" method="POST" >
            <fieldset>
                <legend>Formulário | Clientes KronaApp</legend>
                <br>
                <div class="inputBox">
                    <label for="cliente" class="labeLInput">Cliente Utilizando KronaApp:</label>
                    <input type="text" name="cliente" id="cliente" class="inputUser" required>
                    
                </div>  
                <br><br>     
                <div class="inputBox">
                    <label for="emailacesso"class="labeLInput">E-mail válido:</label>
                    <input type="emailacesso" name="emailacesso" id="emailacesso" class="inputUser" required>
                </div>      
                <br><br>
                <input type="submit" name="submit" value="Enviar" id="submit">
            </fieldset>
        </form>
        <a href="../../../index.php" class="link-home"><img class="img-home" src="../img/figuras-icons/home.png"></a>
        <a href="../index-adm.php" class="link-home"><img class="img-home" src="../img/figuras-icons/btn-voltar.png"></a>
    </div>
    
</body>
</html>