<?php

include_once('../controllers/config.php');

$sql = "SELECT * FROM resultados ORDER BY id DESC";

$result = $conexao->query($sql);




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pagina-formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Lista | clientes Integrados</title>
    <link rel="icon" type="image/x-icon" href="../img/logos/logo-cinco.png">
</head>
<body>
<div class="menu">
<ul id="listas" class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="../index-adm.php"><img class="acessar" src="../img/figuras-icons/home-ico.png" title="Voltar a pagina inicial"></a>
  </li>
  <li class="nav-item">
    <sub><sub><sub><sub><a class="nav-link" href="../index-adm.php"><img class="acessar" src="../img/figuras-icons/btn-voltar.png" title="Voltar"></a></sub></sub></sub></sub>
  </li>
</ul>
    </div>
    <div class="m-5">
            <table class="table text-white table-bg">
              <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Colaborador</th>
                        <th scope="col">Autotrac</th>
                        <th scope="col">Omnilink</th>
                        <th scope="col">Ônix</th>
                        <th scope="col">Sighra</th>
                        <th scope="col">Sascar</th>
                        <th scope="col">Ações</th>
                        
                    </tr>
                </thead>
              <tbody>
                      <?php
                            while($user_data = mysqli_fetch_assoc($result))
                                      {
                                            echo "<tr>";
                                            echo "<td>".$user_data['id']."</td>";
                                            echo "<td>" .$user_data['colaborador']."</td>";
                                            echo "<td>" .$user_data['autotrac']."</td>";
                                            echo "<td>" .$user_data['omnilink']."</td>";
                                            echo "<td>" .$user_data['onix']."</td>";
                                            echo "<td>" .$user_data['sighra']."</td>";
                                            echo "<td>" .$user_data['sascar']."</td>";
                                            echo "<td>
                                            <a class='btn btn-sm btn-outline-info'href='editar.php?id=$user_data[id]' title='Editar'>
                                              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                              <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                              </svg>
                                            </a>
                                                  </td>";
                                      }
                        ?>  
              </tbody>
        </table>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>