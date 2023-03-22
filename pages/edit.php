<?php

if(!empty($_GET['id']))
{
   

    include_once('../controllers/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM clientes WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            
            $nome =             $user_data['nome'];
            $email =            $user_data['email'];
            $contato =          $user_data['contato'];
            $telefone =         $user_data['telefone'];
            $tms =              $user_data['tms'];
            $condicao =         $user_data['condicao'];
            $data_integrada =   $user_data['data_integrada'];
            }
        }
    else
    {
        header("Location: adm-lista-clientes.php");
    }    
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
        <form action="edit.php" method="POST" >
            <fieldset>
                <legend>Formulário | Clientes Integrados</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labeLInput">Cliente Integrado:</label>
                </div>  
                <br>    
                <div class="inputBox">
                    <label for="email"class="labeLInput">E-mail válido:</label>
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="contato" class="labeLInput">Contato:</label>
                    <input type="text" name="contato" id="contato" class="inputUser" value="<?php echo $contato ?>" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="telefone"class="labeLInput">Telefone (WhatsApp):</label>
                    <input type="text" name="telefone"  class="inputUser" value="<?php echo $telefone ?>" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="tms" class="labeLInput">Qual é o TMS?:</label>
                    <input type="text" name="tms" id="tms" class="inputUser" value="<?php echo $tms ?>" required>
                </div>  
                <br>      
                <p class="labeLInput">Condição:</p>
                <input type="radio" id="ativo" name="condicao" value="ativo" <?php echo ($condicao == 'ativo') ? 'checked' : '' ?> required>
                <label for="ativo">Integração Ativa</label>
                <br>
                <input type="radio" id="inativo" name="condicao" value="inativo" <?php echo ($condicao == 'inativo') ? 'checked' : '' ?> required>
                <label for="inativo">Integração Inativa</label>
                <br>
                <input type="radio" id="declinou" name="condicao" value="declinou" <?php echo ($condicao == 'declinou') ? 'checked' : '' ?> required>
                <label for="declinou">Cliente Declinou</label>
                <br><br>
                    <label for="data_integrada" class="labeLInput">Integrado em: &nbsp; </label>
                    <input type="date" name="data_integrada" id="data_integrada" value="<?php echo $data_integrada ?>" required>
                <br><br>
                <input type="submit" name="update" value="Enviar" id="update">
            </fieldset>
        </form>
        <a href="../../../index.php" class="link-home"><img class="img-home" src="../img/figuras-icons/home.png"></a>
        <a href="../index-adm.php" class="link-home"><img class="img-home" src="../img/figuras-icons/btn-voltar.png"></a>
    </div>
    
</body>
</html>