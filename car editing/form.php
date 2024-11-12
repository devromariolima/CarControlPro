<?php
if (!empty($_GET['id'])) {

  include_once('../conexao.php');

  $id = $_GET['id'];

  $sqlselect = "SELECT * FROM carros WHERE id=$id";

  $result = $mysqli->query($sqlselect);

  if ($result->num_rows > 0)
    while ($userdata = mysqli_fetch_assoc($result)) {

      $placa = $userdata['placa'];
      $descricao_do_veiculo = $userdata['descricao_do_veiculo'];
      $marca = $userdata['marca'];
      $modelo = $userdata['modelo'];
      $ano_de_fabricacao = $userdata['ano_de_fabricacao'];
      $valor = $userdata['valor'];
      $tara = $userdata['tara'];
      $unidade_federativa = $userdata['unidade_federativa'];
      $situacao = $userdata['situacao'];
      $local_de_uso = $userdata['local_de_uso'];
      $responsavel = $userdata['responsavel'];
      $vencimento_do_seguro = $userdata['vencimento_do_seguro'];
      $vencimento_do_ipva = $userdata['vencimento_do_ipva'];
    }
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
  <a href="consulta_veiculos.php" class="btn btn-primary">Voltar</a>
  <div class="container">

    <!------ Inicio do formulario ---------->

    <div class="p-3 mb-2 text-white color-global">Dados do veiculo</div>
    <form action="../save car/saveEdit_form.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Placa</label>
          <input type="text" name="placa" id="placa" class="form-control" placeholder="Placa" value="<?php echo $placa ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputSurname">Descrição do veiculo</label>
          <input type="text" name="descricao_do_veiculo" id="descricao_do_veiculo" class="form-control" placeholder="Descrição do veiculo" value="<?php echo $descricao_do_veiculo ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Marca</label>
          <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca" value="<?php echo  $marca ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Modelo</label>
          <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" value="<?php echo $modelo ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Ano de fabricação</label>
          <input type="date" class="form-control" name="ano_de_fabricacao" id="ano_de_fabricacao" value="<?php echo $ano_de_fabricacao ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Valor</label>
          <input type="text" class="form-control" name="valor" id="valor" placeholder="Valor do veiculo" value="<?php echo $valor ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Tara</label>
          <input type="number" class="form-control" name="tara" id="tara" placeholder="Tara do veiculo" value="<?php echo $tara ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Unidade federativa</label>
          <input type="text" class="form-control" name="unidade_federativa" id="unidade_federativa" placeholder="Unidade federativa" value="<?php echo $unidade_federativa ?>" required>
        </div>
      </div>

      <div class="p-3 mb-2 text-white color-global">Mais Informações</div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Situação</label>
          <select class="form-control" name="situacao" required>
            <option value="Ativo" <?php if ($situacao == "Ativo") echo "selected"; ?>>Ativo</option>
            <option value="Inativo" <?php if ($situacao == "Inativo") echo "selected"; ?>>Inativo</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="inputSurname">Local de uso</label>
          <select class="form-control" name="local_de_uso" required>
            <option <?php if ($local_de_uso == "Porto dos Gauchos") echo "selected"; ?>>Porto dos Gauchos</option>
            <option <?php if ($local_de_uso == "Juara") echo "selected"; ?>>Juara</option>
            <option <?php if ($local_de_uso == "Brasnorte") echo "selected"; ?>>Brasnorte</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="inputEmail4">Responsavel</label>
          <input type="text" class="form-control" name="responsavel" id="responsavel" placeholder="Responsavel" value="<?php echo $responsavel ?>" required>
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Vencimento do seguro</label>
          <input type="date" class="form-control" name="vencimento_do_seguro" id="vencimento_do_seguro" value="<?php echo $vencimento_do_seguro ?>" required>
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Vencimento do IPVA</label>
          <input type="date" class="form-control" name="vencimento_do_ipva" id="vencimento_do_ipva" value="<?php echo $vencimento_do_ipva ?>" required>
        </div>
      </div>

      <button type="button" class="btn color-global-btn" data-toggle="modal" data-target="#exampleModal">Salvar alterações</button>

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
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <button type="submit" name="update" id="update" class="btn color-global-btn">Salvar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>



<!-- </form> -->