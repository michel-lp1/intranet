<?php

include_once('../controllers/config.php');

$sql = "SELECT * FROM controle_jornada ORDER BY id ASC";


if (!empty($_GET['search'])) 
{
      $data = $_GET['search'];
      $sql = "SELECT * FROM controle_jornada WHERE nome LIKE '%$data%' or telefone LIKE '%$data%' or contato LIKE '%$data%'  ORDER BY id ASC";

}
else
{
      $sql = "SELECT * FROM controle_jornada ORDER BY nome ASC";
}


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
    <a class="nav-link" href="../../../index.php"><img class="acessar" src="../img/figuras-icons/home-ico.png"></a>
  </li>
</ul>
    </div>
    <div class="box-search">
      <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
      <button onclick="searchData()" class="btn btn-outline-warning">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
      </button>
  </div>
    <div class="m-5">
            <table class="table text-white table-bg">
              <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Contato</th>
                        <th scope="col">E-mail</th>
                        
                    </tr>
                </thead>
              <tbody>
                      <?php
                            while($user_data = mysqli_fetch_assoc($result))
                                      {
                                            echo "<tr>";
                                            echo "<td>" .$user_data['id']."</td>";
                                            echo "<td>" .$user_data['nome']."</td>";
                                            echo "<td>" .$user_data['telefone']."</td>";
                                            echo "<td>" .$user_data['contato']."</td>";
                                            echo "<td>" .$user_data['email']."</td>";
                                      }
                        ?>  
              </tbody>
        </table>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>



<script>

          var search = document.getElementById('pesquisar');

            search.addEventListener("keydown", function(event){
                if(event.key === "Enter")
                {

                  searchData();

                }
            });

          function searchData() 
          {

            window.location = "lista-clientes-jornada.php?search="+search.value;

          }

      </script>
</html>