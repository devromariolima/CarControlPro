<?php
include('conexao.php');

$sql = "SELECT * FROM carros WHERE local_de_uso = 'Porto dos gauchos'";

$result = $mysqli->query($sql);

// print_r($result);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link CSS-->
    <link rel="stylesheet" href="css/consulta.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>consulta</title>

</head>
<body>

  <div class="m-5 table-bg">
    <table class="table">
        <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Placa</th>
        <th scope="col">Descrição do veiculo</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Ano de fabricação</th>
        <th scope="col">Valor</th>
        <th scope="col">Tara</th>
        <th scope="col">Unidade federativa</th>
        <th scope="col">Situação</th>
        <th scope="col">Local de uso</th>
        <th scope="col">Responsavel</th>
        <th scope="col">Vencimento do seguro</th>
        <th scope="col">vencimento do IPVA</th>
        <th scope="col">...</th>
       </tr>
       </thead>
     <tbody>

    <?php
    while ($userdata = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$userdata['id']."</td>";
      echo "<td>".$userdata['placa']."</td>";
      echo "<td>".$userdata['descricao_do_veiculo']."</td>";
      echo "<td>".$userdata['marca']."</td>";
      echo "<td>".$userdata['modelo']."</td>";
      echo "<td>".$userdata['ano_de_fabricacao']."</td>";
      echo "<td>".$userdata['valor']."</td>";
      echo "<td>".$userdata['tara']."</td>";
      echo "<td>".$userdata['unidade_federativa']."</td>";
      echo "<td>".$userdata['situacao']."</td>";
      echo "<td>".$userdata['local_de_uso']."</td>";
      echo "<td>".$userdata['responsavel']."</td>";
      echo "<td>".$userdata['vencimento_do_seguro']."</td>";
      echo "<td>".$userdata['vencimento_do_ipva']."</td>";

    }

    ?>

     </tbody>
    </table>
  </div>





    
</body>
</html>