<?php
include('conexao.php');

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
    <link rel="stylesheet" href="css/consulta.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <!-- Bootstrap icones-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
      echo "<td>
      <a class='btn btn-primary btn-sm' href='form.php?id=$userdata[id]'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
         <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
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