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

    $resumo = mysqli_query($conexao, "INSERT INTO autotrac (avaliador, nome, cpf, dia, pergunta_um, pergunta_dois, pergunta_tres, pergunta_quatro, pergunta_cinco ) 
    VALUES ('$avaliador', '$nome', '$cpf', '$dia', '$pergunta_um', '$pergunta_dois', '$pergunta_tres', '$pergunta_quatro', '$pergunta_cinco')");

    header("Location: avaliacao-autotrac.php");
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
    <title>Avaliação - Tecnologia Autotrac</title>
    <script src="../js/mascara_cpf.js"></script>
</head>
<body>
    <a href="../../../index.php"><img src="../img/figuras-icons/home-ico.png" alt="link de home" title="Voltar para pagina inicial"></a>
    <div class="container">
        <form class="form-control" action="avaliacao-autotrac.php" method="POST">
            <fieldset class="quadro">
                <legend class="legenda-container"><img src="../img/logo-tecnologias/tec-autotrac.png" alt="logo da autotrac" title="Tecnologia autotrac"> Teste de conhecimento</legend>
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
                    <p class="pergunta">1 - Qual a importância da "assosiação do plano de viagem"?</p>
                    <p class="alternativa">a. Para que seja embarcado a rota e as binarias das macros.</p>
                    <p class="alternativa">b. Para que seja embarcado a rota e os alertas do veículo.</p>
                    <p class="alternativa">c. Para que seja embarcado a rota e as mensagens do veículo.</p>
                    <p class="alternativa">d. Para que seja embarcado a rota e as binarias e as mensagens.</p>
                    <p class="alternativa">e. Para que seja embarcado a rota e os alertas e as mensagens.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_um" id="pergunta_um" maxlength="1" required>
                    <hr>
                </div>
                <div class="form-group">
                    <p class="pergunta">2 - Qual comando é usado para ativar um OBC caso esteja inativo?</p>
                    <p class="alternativa">a. Solicitar Jammer.</p>
                    <p class="alternativa">b. Solicitar OBC.</p>
                    <p class="alternativa">c. Solicitar Firmware.</p>
                    <p class="alternativa">d. Geral configuração Básica.</p>
                    <p class="alternativa">e. Limpar funções lógicas.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_dois" id="pergunta_dois" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">3 - Cite o comando "obrigatório" que devemos enviar toda vez que é feita a troca do perfil OBC</p>
                    <p class="alternativa">a. Solicitar Jammer.</p>
                    <p class="alternativa">b. Solicitar OBC.</p>
                    <p class="alternativa">c. Solicitar Firmware.</p>
                    <p class="alternativa">d. Limpar funções lógicas.</p>
                    <p class="alternativa">e. Geral configuração Básica.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_tres" id="pergunta_tres" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">4 - Qual o tipo de equipamento que existe a possibilidade do desbloqueio por contra-senha</p>
                    <p class="alternativa">a. Satélite.</p>
                    <p class="alternativa">b. Prime.</p>
                    <p class="alternativa">c. Hibrido.</p>
                    <p class="alternativa">d. Celular.</p>
                    <p class="alternativa">e. Autotrac Caminhoneiro.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_quatro" id="pergunta_quatro" maxlength="1" required>
                </div>
                <hr>
                <div class="form-group">
                    <p class="pergunta">5 - Em qual das opções abaixo eu consigo ver as "tabelas de Status" solicitadas</p>
                    <p class="alternativa">a. Ultimos eventos.</p>
                    <p class="alternativa">b. Ultimos apontamentos.</p>
                    <p class="alternativa">c. Ultimas observações.</p>
                    <p class="alternativa">d. Alertas OBC.</p>
                    <p class="alternativa">e. Ultimas posições.</p>
                    <label  class="respostas">Informe a alternativa correta aqui</label>
                    <input class="resp" type="text" name="pergunta_cinco" id="pergunta_cinco" maxlength="1" required>
                </div>
                <hr>                
            </fieldset>
        </form>

    
    </div>

  
</body>
</html>