<?php
if (!empty($_GET['id'])) 
 {

  include_once('conexao.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM carros WHERE id=$id";

    $result = $mysqli->query($sqlselect);

    if ($result->num_rows > 0) 
      {

        $sqlDelete = "DELETE FROM carros WHERE id=$id";
        $resultDelete = $mysqli->query($sqlDelete);

 
}   


      }

      header('Location:consulta_veiculos.php')
           
?>
