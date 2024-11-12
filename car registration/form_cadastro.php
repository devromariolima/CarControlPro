<?php
if (isset($_POST['submit'])) {

  include_once('../conexao.php');

  $placa = $_POST['placa'];
  $descricao_do_veiculo = $_POST['descricao_do_veiculo'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $ano_de_fabricacao = $_POST['ano_de_fabricacao'];
  $valor = $_POST['valor'];
  $tara = $_POST['tara'];
  $unidade_federativa = $_POST['unidade_federativa'];
  $situacao = $_POST['situacao'];
  $local_de_uso = $_POST['local_de_uso'];
  $responsavel = $_POST['responsavel'];
  $vencimento_do_seguro = $_POST['vencimento_do_seguro'];
  $vencimento_do_ipva = $_POST['vencimento_do_ipva'];

  $result = mysqli_query($mysqli, "INSERT INTO carros(placa,descricao_do_veiculo,marca,modelo,ano_de_fabricacao,valor,tara,unidade_federativa,situacao,local_de_uso, responsavel,vencimento_do_seguro,vencimento_do_ipva)
 VALUES ('$placa','$descricao_do_veiculo','$marca','$modelo','$ano_de_fabricacao','$valor','$tara','$unidade_federativa','$situacao','$local_de_uso','$responsavel','$vencimento_do_seguro','$vencimento_do_ipva')");


  header('Location: ../consult car/consulta_veiculos.php');
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>

  <!-- Links externos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style_form.css" media="screen" />
  <link rel="stylesheet" href="../css/form.css">

</head>

<body>
  <a href="consulta_veiculos.php">Voltar</a>
  <div class="container">

    <!------ Inicio do formulario ---------->

    <div class="p-3 mb-2 text-white color-global">Dados do veiculo</div>
    <form action="form_cadastro.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Placa</label>
          <input type="text" name="placa" id="placa" class="form-control" placeholder="Placa" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputSurname">Descrição do veiculo</label>
          <input type="text" name="descricao_do_veiculo" id="descricao_do_veiculo" class="form-control" id="inputSurname" placeholder="Descrição do veiculo" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Marca</label>
          <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Modelo</label>
          <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Ano de fabricação </label>
          <input type="Date" class="form-control" name="ano_de_fabricacao" id="ano_de_fabricacao" placeholder="Ano de fabricação" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Valor</label>
          <input type="number" class="form-control" name="valor" id="valor" placeholder="Valor do veiculo" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Tara</label>
          <input type="number" class="form-control" name="tara" id="tara" placeholder="Tara do veiculo" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Unidade federativa</label>
          <input type="text" class="form-control" name="unidade_federativa" id="unidade_federativa" placeholder="Unidade federativa" required>
        </div>
      </div>


      <div class="p-3 mb-2 text-white color-global">Mais Informações</div>
      <form action="" method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName">Situação</label>
            <!-- <input type="text"  class="form-control" name="situacao" id="situacao" placeholder="Ativo/Inativo" required> -->
            <select class="form-control" id="exampleFormControlSelect1" name="situacao" id="situacao" placeholder="Ativo/Inativo" required>
              <option>Ativo</option>
              <option>Inativo</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputSurname">Local de uso</label>
            <select class="form-control" id="exampleFormControlSelect1" name="local_de_uso" id="local_de_uso" required>
              <option>Porto dos gauchos</option>
              <option>Juara</option>
              <option>Brasnorte</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Responsavel</label>
            <input type="text" class="form-control" name="responsavel" id="responsavel" placeholder="responsavel" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Vencimento do seguro</label>
            <input type="Date" class="form-control" name="vencimento_do_seguro" id="vencimento_do_seguro" placeholder="Vencimento do seguro" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">vencimento do IPVA</label>
            <input type="Date" class="form-control" name="vencimento_do_ipva" id="vencimento_do_ipva" placeholder="vencimento do IPVA" required>
          </div>
        </div>


        <!-- <div class="p-3 mb-2 text-white color-global">Informações Adicionais</div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Informações Adicionais</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </form>
                            -->
        <!-- Button trigger modal -->
        <button type="button" class="btn color-global-btn" data-toggle="modal" data-target="#exampleModal">
          Salvar alterações
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realizar as alterações</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Deseja salvar as alterações?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="submit" id="submit" class="btn color-global-btn">Salvar</button>
              </div>
            </div>
          </div>
        </div>
  </div>
</body>


<!-- </form> -->