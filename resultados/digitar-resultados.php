<?php

if(isset($_POST['submit']))
{
  

    include_once('../controllers/config.php');

    $colaborador =      $_POST['colaborador'];
    $cpf =              $_POST['cpf'];
    $autotrac =         $_POST['autotrac'];
    $omnilink =         $_POST['omnilink'];
    $onix =             $_POST['onix'];
    $sighra =           $_POST['sighra'];
    $sascar =           $_POST['sascar'];
    $historico =        $_POST['historico'];

    $resumo = mysqli_query($conexao, "INSERT INTO resultados (colaborador, cpf, autotrac, omnilink, onix, sighra, sascar, media, historico ) 
    VALUES ('$colaborador', '$cpf', '$autotrac', '$omnilink', '$onix', '$sighra', '$sascar', '$media', '$historico')");

echo "Dados gravados com sucesso";   
header("Location: editar-resultados.php");
   
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pagina-resultados.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="../js/mascara_cpf.js"></script>
    <title>Resultados</title>
</head>
<body>
        <div class="quadro">
                <a class="link-av" href="../index-adm.php"><img src="../img/icons/icon-home.png"> -  Home</a><br>
        </div>
            <div class="container" >
                
                <form class="form-control" action="digitar-resultados.php" method="post">
                <h1 class="titulo">Cadastro de Notas</h1>
                <img class="figura-form" src="../img/logos/logo-prova.png" alt="imagem-de-prova" title="Cadastro de Notas">
                <hr>
                <label  class="rotulo-form">Nome do colaborador:</label>
                <input type="text" class="dados" placeholder="Nome do colaborador" id="colaborador" name="colaborador" autocomplete="off" required>
                <label  class="rotulo-form">CPF do colaborador:</label>
                <input type="text" class="dados-cpf" placeholder="CPF do colaborador" maxlength="14" id="cpf" name="cpf" onkeyup="mascara_cpf()" autocomplete="off" required><br>
                <label  class="rotulo-form">Autotrac - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_autotrac" name="autotrac"  autocomplete="off" required><br>
                <label  class="rotulo-form">Omnilink - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_omnilink" name="omnilink"  autocomplete="off" required><br>
                <label  class="rotulo-form">Onix - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_onix" name="onix"  autocomplete="off" required><br>
                <label  class="rotulo-form">Sighra - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_sighra" name="sighra"  autocomplete="off" required><br>
                <label  class="rotulo-form">Sascar - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_sascar" name="sascar"  autocomplete="off" required><br>
                <input class="btn btn-outline-success" type="submit"  value="Salvar cadastro" name="submit" id="submit">
            </form>      
            </div>









   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>