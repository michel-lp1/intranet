<?php

if(isset($_POST['submit']))
{
   // print_r($_POST['nome']); //print_r('<br>'); //print_r($_POST['email']); //print_r('<br>'); //print_r($_POST['contato']);//print_r('<br>');    //print_r($_POST['telefone']);    //print_r('<br>');    //print_r($_POST['tms']);    //print_r('<br>');    //print_r($_POST'condicao']);    //print_r('<br>');    //print_r($_POST['data_integrada']);

    include_once('../controllers/config.php');


    $tecnologia =        $_POST['tecnologia'];
    $resposta_um =       $_POST['resposta_um'];
    $resposta_dois =     $_POST['resposta_dois'];
    $resposta_tres =     $_POST['resposta_tres'];
    $resposta_quatro =   $_POST['resposta_quatro'];
    $resposta_cinco =    $_POST['resposta_cinco'];
    


    $resumo = mysqli_query($conexao, "INSERT INTO gabaritos (tecnologia, resposta_um, resposta_dois, resposta_tres, resposta_quatro, resposta_cinco) VALUES ('$tecnologia', '$resposta_um', '$resposta_dois', '$resposta_tres', '$resposta_quatro', '$resposta_cinco')");

    header("Location: gabaritos.php");
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
        <form action="gabaritos.php" method="POST" >
            <fieldset>
                <legend>Formulário | Gabaritos</legend>
                <br>
                <div class="inputBox">
                    <label for="cliente" class="labeLInput">Tecnologia:</label>
                    <input type="text" name="tecnologia" id="tecnologia" class="inputUser" required>
                    
                </div>  
                <br><br>     
                <div class="inputBox">
                    <label for="emailacesso"class="labeLInput">Resposta Um:</label>
                    <input type="emailacesso" name="resposta_um" id="resposta_um" class="inputUser" required>
                </div>      
                <br><br>
                <div class="inputBox">
                    <label for="cliente" class="labeLInput">Resposta Dois:</label>
                    <input type="text" name="resposta_dois" id="resposta_dois" class="inputUser" required>
                </div> 
                <br><br> 
                <div class="inputBox">
                    <label for="cliente" class="labeLInput">Resposta Três:</label>
                    <input type="text" name="resposta_tres" id="resposta_tres" class="inputUser" required>
                </div> 
                <br><br> 
                <div class="inputBox">
                    <label for="cliente" class="labeLInput">Resposta Quatro:</label>
                    <input type="text" name="resposta_quatro" id="resposta_quatro" class="inputUser" required>
                </div> 
                <br><br> 
                <div class="inputBox">
                    <label for="cliente" class="labeLInput">Resposta Cinco:</label>
                    <input type="text" name="resposta_cinco" id="resposta_cinco" class="inputUser" required>
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