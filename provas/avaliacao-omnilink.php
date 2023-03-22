<?php

if(isset($_POST['submit']))
{
  

    include_once('../controllers/config.php');

    $avaliador =        $_POST['avaliador'];
    $nome =             $_POST['nome'];
    $cpf =              $_POST['cpf'];
    $dia =              $_POST['dia'];
    $pergunta_um =      $_POST['pergunta_um'];
    $pergunta_dois =    $_POST['pergunta_dois'];
    $pergunta_tres =    $_POST['pergunta_tres'];
    $pergunta_quatro =  $_POST['pergunta_quatro'];
    $pergunta_cinco =   $_POST['pergunta_cinco'];

    $resumo = mysqli_query($conexao, "INSERT INTO omnilink (avaliador, nome, cpf, dia, pergunta_um, pergunta_dois, pergunta_tres, pergunta_quatro, pergunta_cinco ) 
    VALUES ('$avaliador', '$nome', '$cpf', '$dia', '$pergunta_um', '$pergunta_dois', '$pergunta_tres', '$pergunta_quatro', '$pergunta_cinco')");

    header("Location: avaliacao-omnilink.php");
    echo "Dados gravados com sucesso";
    
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pagina-avaliacao.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Avaliação - Tecnologia Omnilink</title>
    <script src="../js/mascara_cpf.js"></script>
</head>
<body>
    <a href="../../../index.php"><img src="../img/figuras-icons/home-ico.png" alt="link de home" title="Voltar para pagina inicial"></a>
    <div class="container">
        <form class="form-control" action="avaliacao-omnilink.php" method="POST">
            <fieldset class="quadro">
                <legend class="legenda-container"><img src="../img/logo-tecnologias/tec-omnilink.png" alt="logo da autotrac" title="Tecnologia autotrac"> Teste de conhecimento</legend>
                <label class="rotulos">Nome do Avaliador:</label>
                <input type="text" class="form-control" placeholder="Nome do Avaliador" name="avaliador" id="avaliador" autocomplete="off" required><br>
                <label class="rotulos">Nome Completo:</label>
                <input type="text" class="form-control" placeholder="Nome Completo" name="nome" id="nome" autocomplete="off" required><br>
                <label class="rotulos-cpf">CPF:</label>
                <input type="text" class="dados-cpf" placeholder="somente numeros" name="cpf" id="cpf" autocomplete="off" onkeyup="mascara_cpf()" maxlength="14" required>
                <label class="rotulos-data">Data:</label>
                <input class="calendario" type="date"  name="dia" id="dia" autocomplete="off" required>
                <input type="submit" class="btn btn-outline-success" value="Enviar Prova" name="submit" id="submit">
            </fieldset><br>
            <fieldset class="quadro-dois">
                <legend class="legenda-container">Questões</legend>
                <img class="figura-teste" src="../img/figuras-icons/teste.png">
                <div class="form-group">
                    <p class="pergunta">1 - Assinale a opção que determina a falta de espelhamento na tecnologia</p>
                    <p class="alternativa">a. Nunca discado.</p>
                    <p class="alternativa">b. 2 minutos celular (claro).</p>
                    <p class="alternativa">c. Nunca discado (tim).</p>
                    <p class="alternativa">d. Satélite (iridium).</p>
                    <p class="alternativa">e. Nunca discado (vivo).</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_um" id="pergunta_um" maxlength="1" required>
                    <hr>
                </div>
                <div class="form-group">
                    <p class="pergunta">2 - Qual das opções abaixo eu configuro o veículo para viajar?</p>
                    <p class="alternativa">a. Cadastro.</p>
                    <p class="alternativa">b. Bloquear.</p>
                    <p class="alternativa">c. Histórico.</p>
                    <p class="alternativa">d. Características.</p>
                    <p class="alternativa">e. Troca de Operadora celular.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_dois" id="pergunta_dois" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">3 - Onde identificamos no sistema se o veículo possui uma ou duas antenas?</p>
                    <p class="alternativa">a. Bloquear.</p>
                    <p class="alternativa">b. Indicadores do rastreador.</p>
                    <p class="alternativa">c. Cadastro.</p>
                    <p class="alternativa">d. Relatórios.</p>
                    <p class="alternativa">e. Características.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_tres" id="pergunta_tres" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">4 - A pesquisa de veículos novos no Omnilink deve ser feita sempre por:</p>
                    <p class="alternativa">a. Nº de série.</p>
                    <p class="alternativa">b. MCT.</p>
                    <p class="alternativa">c. Placa.</p>
                    <p class="alternativa">d. Placa e Nº de série .</p>
                    <p class="alternativa">e. MCT e Nº de série.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_quatro" id="pergunta_quatro" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">5 - Para que serve o comando "teste de comunicação"?</p>
                    <p class="alternativa">a. Para testar a comunicação da central com o veículo.</p>
                    <p class="alternativa">b. Para testar a comunicação dos chips de celular e antena satélite.</p>
                    <p class="alternativa">c. Para testar a comunicação apenas da antena satélite.</p>
                    <p class="alternativa">d. Para testar a comunicação apenas dos chips instalados no veículo.</p>
                    <p class="alternativa">e. Para testar a comunicação da central com o teclado do veículo.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_cinco" id="pergunta_cinco" maxlength="1" required>
                </div>
                <hr>                
            </fieldset>
        </form>

    
    </div>

  
</body>
</html>