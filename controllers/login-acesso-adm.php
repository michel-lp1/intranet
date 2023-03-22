<?php

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])){

    include_once('config.php');
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    

    $sql = "SELECT * FROM acessoadm WHERE cpf = '$cpf' and senha = '$senha'";

    $result = $conexao->query($sql);


    if(mysqli_num_rows($result)< 1){

        header('Location: ../pagina-acesso-adm.php');
    }
    else
    {
        header('Location: ../index-adm.php');
    }
}
else
{
    header('Location: ../pagina-acesso-adm.php');
}


?>