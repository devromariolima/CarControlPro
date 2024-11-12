<?php
include('../conexao.php');
// include_once('delete.php');

$sql = "SELECT * FROM carros ORDER BY id";
$result = $mysqli->query($sql);

// print_r($result);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link CSS-->
    <link rel="stylesheet" href="../css/consulta.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Bootstrap icones-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>consulta</title>

</head>

<body>

    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../sidebar.php">
                        <i class="fa fa-home"></i>
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope-o">
                        </i>
                        Clientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../car registration/form_cadastro.php">Cadastrar clientes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../reports car/relatorio_carros_geral.php">Relatorios de clientes</a>
                    </div>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope-o">
                        </i>
                        Dashboard de Clientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <!-- <a class="dropdown-item" href="#">Dashboard de Clientes</a> -->
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell">
                            <span class="badge badge-danger">11</span>
                        </i>
                        Tarefas pendentes
                    </a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>


    <div class="m-5 table-bg">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">RG</th>
                    <th scope="col">CPF/CNPJ</th>
                    <th scope="col">Profissão</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Telefone celular</th>
                    <th scope="col">Telefone residencial</th>
                    <th scope="col">Endereço residencial</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Responsavel</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($userdata = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $userdata['id'] . "</td>";
                    echo "<td>" . $userdata['placa'] . "</td>";
                    echo "<td>" . $userdata['descricao_do_veiculo'] . "</td>";
                    echo "<td>" . $userdata['marca'] . "</td>";
                    echo "<td>" . $userdata['modelo'] . "</td>";
                    echo "<td>" . $userdata['ano_de_fabricacao'] . "</td>";
                    echo "<td>" . $userdata['valor'] . "</td>";
                    echo "<td>" . $userdata['tara'] . "</td>";
                    echo "<td>" . $userdata['unidade_federativa'] . "</td>";
                    echo "<td>" . $userdata['situacao'] . "</td>";
                    echo "<td>" . $userdata['local_de_uso'] . "</td>";
                    echo "<td>" . $userdata['responsavel'] . "</td>";
                    echo "<td>" . $userdata['vencimento_do_seguro'] . "</td>";
                    echo "<td>" . $userdata['vencimento_do_ipva'] . "</td>";
                    echo "<td>
      
      
    <a class='btn btn-primary btn-sm p-sm-2' href='../car editing/form.php?id=$userdata[id]'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
         <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
      </svg>
    </a>
    <a class='btn btn-danger btn-sm p-sm-2' href='../delete car/delete.php?id=$userdata[id]'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3 ' viewBox='0 0 16 16'>
      <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
    </svg>
    </a>
   </td>";

                    echo "</td>";
                }

                ?>

            </tbody>
        </table>
    </div>






</body>

</html>