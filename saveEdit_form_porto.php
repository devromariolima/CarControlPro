<?php
include_once('conexao.php');

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $placa = $_POST['placa'];
    $descricao_do_veiculo = $_POST['descricao_do_veiculo'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano_de_fabricacao = $_POST['ano_de_fabricacao'];
    $valor = $_POST['valor'];
    $tara =$_POST['tara'];
    $unidade_federativa = $_POST['unidade_federativa'];
    $situacao = $_POST['situacao'];
    $local_de_uso = $_POST['local_de_uso'];
    $responsavel = $_POST['responsavel'];
    $vencimento_do_seguro = $_POST['vencimento_do_seguro'];
    $vencimento_do_ipva = $_POST['vencimento_do_ipva'];

    $sqlUpdate = "UPDATE carros SET placa='$placa', descricao_do_veiculo='$descricao_do_veiculo', marca='$marca', ano_de_fabricacao='$ano_de_fabricacao', modelo='$modelo', valor='$valor', tara='$tara', unidade_federativa='$unidade_federativa', situacao='$situacao', local_de_uso='$local_de_uso', placa='$placa', responsavel='$responsavel', vencimento_do_seguro='$vencimento_do_seguro', vencimento_do_ipva='$vencimento_do_ipva' WHERE id = '$id'";
    
    $result = $mysqli->query($sqlUpdate);

   
}


 header('Location: consulta_veiculos_porto.php');

?>
