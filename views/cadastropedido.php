<?php
session_start();
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancopedidos.php");
include_once("../models/bancofuncionarios.php");
$codUsuFK = $_SESSION["codigoUsuario"];
$funcionario = listabuscafunUsu($conexao, $codUsuFK);


?>

<form class="row g-3">
  <div class="col-md-3">
    <label for="inputcodfun" class="form-label">Código</label>
    <input type="text" value="<?php echo ($funcionario["codFun"]) ?> " class="form-control" id="inputcodfun">
  </div>
  <div class="col-md-9">
    <label for="inputNomeFun" class="form-label">Funcionário</label>
    <input type="text" value="<?php echo ($funcionario["nomeFun"]) ?>" class="form-control" id="inputNomeFun">
  </div>

  
  <div class="col-md-3">
    <label for="inputcodCli" class="form-label">Código Cliente</label>
    <input type="text" class="form-control" id="inputcodCli" placeholder="Digite o codigo do Cliente">
    <br>
    <button type="submit">Buscar</button>
  </div>

  <div class="col-md-9">
    <label for="inputNomeCli" class="form-label">Cliente</label>
    <input type="text" class="form-control" id="inputNomeCli" placeholder="Vinicius da Silva">
  </div>


  <div class="col-md-3">
    <label for="inputcodJogo" class="form-label">Código do jogo</label>
    <input type="text" class="form-control" id="inputcodJogo">
  </div>
  <div class="col-md-3">
    <label for="inputNomeJogo" class="form-label">Jogo</label>
    <input type="text" class="form-control" id="inputNomeJogo" placeholder="Vinicius da Silva">
  </div>
  <div class="col-md-2">
    <label for="inputQtd" class="form-label">Quantidade</label>
    <select id="inputQtd" class="form-select">
      <option selected>Escolha...</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputValorUni" class="form-label">Valor Unitário</label>
    <input type="text" class="form-control" id="inputValorUni">
  </div>
  <div class="col-md-2">
    <label for="inputTotal" class="form-label">Total</label>
    <input type="text" class="form-control" id="inputTotal">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Confirmar</button>
  </div>
</form>

<?php
include_once("../views/footer.php");
?>