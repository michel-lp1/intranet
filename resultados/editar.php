<?php

if(!empty($_GET['id']))
{
  

    include_once('../controllers/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM resultados WHERE id=$id";

    $resultado = $conexao->query($sqlSelect);

if ($resultado->num_rows > 0) {

    while ($user_data = mysqli_fetch_assoc($resultado)) {

    $colaborador =      $user_data['colaborador'];
    $cpf =              $user_data['cpf'];
    $autotrac =         $user_data['autotrac'];
    $omnilink =         $user_data['omnilink'];
    $onix =             $user_data['onix'];
    $sighra =           $user_data['sighra'];
    $sascar =           $user_data['sascar'];
    $media =            $user_data['media'];
    $historico =        $user_data['historico'];
    }
    
}
else
{
    header('Location:  editar-resultados.php');
}
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
                <a class="link-av" href="../../../index.php"><img src="../img/icons/icon-home.png"> -  Home</a>
        </div>

            <div class="container" >
                
                <form class="form-control" action="salvar.php" method="post">
                <h1 class="titulo">Cadastro de Notas</h1>
                <img class="figura-form" src="../img/logos/logo-prova.png" alt="imagem-de-prova" title="Cadastro de Notas">
                <hr>
                <label  class="rotulo-form">Nome do colaborador:</label>
                <input type="text" class="dados" placeholder="Nome do colaborador" id="colaborador" name="colaborador" value="<?php echo $colaborador ?>"  required>
                <label  class="rotulo-form">CPF do colaborador:</label>
                <input type="text" class="dados-cpf" placeholder="CPF do colaborador" maxlength="14" id="cpf" name="cpf" onkeyup="mascara_cpf()" value="<?php echo $cpf ?>"  required><br>
                <label  class="rotulo-form">Autotrac - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_autotrac" name="autotrac" value="<?php echo $autotrac ?>"  autocomplete="off" ><br>
                <label  class="rotulo-form">Omnilink - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_omnilink" name="omnilink" value="<?php echo $omnilink ?>" autocomplete="off" ><br>
                <label  class="rotulo-form">Onix - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_onix" name="onix" value="<?php echo $onix ?>"  autocomplete="off" ><br>
                <label  class="rotulo-form">Sighra - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_sighra" name="sighra" value="<?php echo $sighra ?>"  autocomplete="off" ><br>
                <label  class="rotulo-form">Sascar - Nota:</label>
                <input type="text" class="dados-notas"  maxlength="2" id="nota_sascar" name="sascar" value="<?php echo $sascar ?>"  autocomplete="off" ><br>
                <label  class="rotulo-form">Informações Importantes:</label>
                <input type="text" class="dados-tst" name="historico" id="historico" value="<?php echo $historico ?>" autocomplete="off">
                
                
                <input class="btn btn-outline-success" type="submit"  value="Salvar cadastro" name="update" id="update">
                <input type="hidden" name="id" value="<?php echo $id ?>">
            </form>      
            </div>









   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>