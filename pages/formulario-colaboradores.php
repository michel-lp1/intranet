<?php

if(isset($_POST['submit']))
{
  

    include_once('../controllers/config.php');

    $nome =      $_POST['nome'];
    $cpf =              $_POST['cpf'];
    $cargo =            $_POST['cargo'];
    $escala =           $_POST['escala'];
    $horario =          $_POST['horario'];
    $empresa =          $_POST['empresa'];
    $admissao =         $_POST['admissao'];
    $posto =            $_POST['posto'];
    $telefone =         $_POST['telefone'];
    $perfil =           $_POST['perfil'];

    $resumo = mysqli_query($conexao, "INSERT INTO colaboradores (nome, cpf, cargo, escala, horario, empresa, admissao, posto, telefone, perfil ) 
    VALUES ('$nome', '$cpf', '$cargo', '$escala', '$horario', '$empresa', '$admissao', '$posto', '$telefone', '$perfil')");

echo "Dados gravados com sucesso";   
header("Location: formulario-colaboradores.php");
   
    
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
    <title>Cadastrar Colaboradores</title>
</head>
<body>
        <div class="quadro">
                <a class="link-av" href="../index-adm.php"><img src="../img/icons/icon-home.png"> -  Home</a><br>
        </div>
            <div class="container" >
                
                <form class="form-control" action="formulario-colaboradores.php" method="post">
                    <input class="btn btn-outline-primary" type="submit"  value="Salvar cadastro" name="submit" id="submit">
                <h1 class="titulo">Cadastro de Colaboradores...</h1>
                <img class="figura-form" src="../img/figuras-icons/btn-acessar.png" alt="botao-acessar" title="Cadastro de Colaboradores">
                <hr>
                <label  class="rotulo-form">Nome do colaborador:</label>
                    <input type="text" class="dados" placeholder="Nome do colaborador" id="nome" name="nome" autocomplete="off" required><br>
                <label  class="rotulo-form">CPF do colaborador:</label>
                    <input type="text" class="dados-cpf" placeholder="CPF do colaborador" maxlength="14" id="cpf" name="cpf" onkeyup="mascara_cpf()" autocomplete="off" required><br>
                <label  class="rotulo-form">Cargo:</label>
                    <input type="text" class="dados"  maxlength="50" id="cargo" name="cargo"  autocomplete="off" required>
                <label  class="rotulo-form">Escala:</label>
                    <input type="text" class="dados"  maxlength="50" id="escala" name="escala"  autocomplete="off" required><br>
                <label  class="rotulo-form">Horario:</label>
                    <input type="time" class="dados"  maxlength="50" id="horario" name="horario"  autocomplete="off" required>
                <label  class="rotulo-form">Empresa:</label>
                    <input type="text" class="dados"  maxlength="50" id="empresa" name="empresa"  autocomplete="off" required><br>
                <label  class="rotulo-form">Admitido em:</label>
                    <input type="date" class="dados"  maxlength="50" id="admissao" name="admissao"  autocomplete="off" required>
                <label  class="rotulo-form">Posto:</label>
                    <input type="text" class="dados"  maxlength="50" id="posto" name="posto"  autocomplete="off" required><br>
                <label  class="rotulo-form">Telefone:</label>
                    <input type="text" class="dados"  maxlength="14" id="telefone" name="telefone"  autocomplete="off" required>
                <label  class="rotulo-form">Perfil:</label>
                    <input type="text" class="dados"  maxlength="50" id="perfil" name="perfil"  autocomplete="off" required ><br>              
            </form>      
            </div>









   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>