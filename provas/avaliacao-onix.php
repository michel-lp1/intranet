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

    $resumo = mysqli_query($conexao, "INSERT INTO onix (avaliador, nome, cpf, dia, pergunta_um, pergunta_dois, pergunta_tres, pergunta_quatro, pergunta_cinco ) 
    VALUES ('$avaliador', '$nome', '$cpf', '$dia', '$pergunta_um', '$pergunta_dois', '$pergunta_tres', '$pergunta_quatro', '$pergunta_cinco')");

    header("Location: avaliacao-onix.php");
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
        <form class="form-control" action="avaliacao-onix.php" method="POST">
            <fieldset class="quadro">
                <legend class="legenda-container"><img src="../img/logo-tecnologias/tec-onix.png" alt="logo da autotrac" title="Tecnologia autotrac"> Teste de conhecimento</legend>
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
                    <p class="pergunta">1 - Quais configurações abaixo devem estar disponíveis no momento do espelhamento?</p>
                    <p class="alternativa">a. Gestão de manutenção, Sleep mode.</p>
                    <p class="alternativa">b. Sleep mode e gerenciar inteligência embarcada.</p>
                    <p class="alternativa">c. Limpar jornada interativa e Sleep mode.</p>
                    <p class="alternativa">d. Gerenciar inteligência embarcada e gestão de manutenção.</p>
                    <p class="alternativa">e. Gerenciar inteligência embarcada e limpar jornada interativa.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_um" id="pergunta_um" maxlength="1" required>
                    <hr>
                </div>
                <div class="form-group">
                    <p class="pergunta">2 - Qual é o relatório mais completo do sistema ONIXSAT?</p>
                    <p class="alternativa">a. Relatório de posições.</p>
                    <p class="alternativa">b. Histórico de posições.</p>
                    <p class="alternativa">c. Relatório analítico de mensagens.</p>
                    <p class="alternativa">d. Histórico de comandos/alertas.</p>
                    <p class="alternativa">e. Relatório analítico.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_dois" id="pergunta_dois" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">3 - Onde no sistema eu consigo configurar o PP do veículo?</p>
                    <p class="alternativa">a. Configurar pedido de posição.</p>
                    <p class="alternativa">b. Configurar histórico de posição.</p>
                    <p class="alternativa">c. Configuração do temporizador.</p>
                    <p class="alternativa">d. Configuração de pedido de posição.</p>
                    <p class="alternativa">e. Configuração de controle de posição.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_tres" id="pergunta_tres" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">4 - Selecione a melhor opção que defina o termo "SLEEP MODE"</p>
                    <p class="alternativa">a. É a opção vinculada no ato do espelhamento para que o veículo gere alertas com a ignição desligada.</p>
                    <p class="alternativa">b. É a opção que o cliente libera para que o veículo gere posição com a ignição desligada.</p>
                    <p class="alternativa">c. É a opção que nós habilitamos no sistema que permite gerar posição do veículo com a ignição delisgada.</p>
                    <p class="alternativa">d. É a opção vinculada no ato do espelhamento para o veículo gerar posição com a ignição desligada.</p>
                    <p class="alternativa">e. É a opção vinculada no ato do espelhamento para que o veículo gerar posição em modo satélite.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_quatro" id="pergunta_quatro" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">5 - Qual a diferença de "embarque de cerca eletrônica" e "vincular cerca eletrônica"?</p>
                    <p class="alternativa">a. O embarque de cerca eletrônica gera alerta e comandos apenas de sirene para entrada e saída da rota, quando eu vinculo só gera alerta sem atuação.</p>
                    <p class="alternativa">b. O embarque de cerca eletrônica gera alerta e comandos apenas de bloqueio e aviso de cabine para saída da rota, quando eu vinculo gera alerta e comando de bloqueio.</p>
                    <p class="alternativa">c. O embarque de cerca eletrônica gera alerta e comandos apenas de sirene e aviso de cabine para saída da rota, quando eu vinculo só gera alerta sem atuação.</p>
                    <p class="alternativa">d. O embarque de cerca eletrônica permite que associe alerta e comandos para entrada e saída da rota, quando eu vinculo gera alerta e comandos de sirene.</p>
                    <p class="alternativa">e. O embarque de cerca permite que eu associe comandos para entrada e saída da rota, quando eu vinculo só gera alerta sem atuação.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_cinco" id="pergunta_cinco" maxlength="1" required>
                </div>
                <hr>                
            </fieldset>
        </form>

    
    </div>

  
</body>
</html>