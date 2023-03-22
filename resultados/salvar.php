<?php

include_once('../controllers/config.php');

if (isset($_POST['update'])) {

    $id =               $_POST['id'];
    $colaborador =      $_POST['colaborador'];
    $cpf =              $_POST['cpf'];
    $autotrac =         $_POST['autotrac'];
    $omnilink =         $_POST['omnilink'];
    $onix =             $_POST['onix'];
    $sighra =           $_POST['sighra'];
    $sascar =           $_POST['sascar'];
    $historico =        $_POST['historico'];


    $sqlUpdate = "UPDATE resultados SET colaborador='$colaborador', cpf='$cpf', autotrac='$autotrac', omnilink='$omnilink', onix='$onix', sighra='$sighra', sascar='$sascar', historico='$historico' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate); 
}
header('Location: editar-resultados.php');




?>