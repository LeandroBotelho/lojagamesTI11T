<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoFuncionarios.php");

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Funcao</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data Nascimento</th>

      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php 
$funcionarios = listafun($conexao);
foreach($funcionarios as $funcionario):
?>
  <tr>
      <th scope="row"><?=$funcionario['codFun']?></th>
      <td><?=$funcionario['nomeFun']?></td>
      <td><?=$funcionario['funcaoFun']?></td>
      <td><?=$funcionario['foneFun']?></td>
      <td><?=$funcionario['datanasFun']?></td>
      <td>
        <form action="../controllers/deletarFuncionario.php" method="Post">
          <input type="hidden" name="codFuncionariodeletar" value="<?=$funcionario['codFun']?>">
          <button type="submit" class="btn-small btn-danger"> X </button>
        </form>
      </td>
      <td>
        <form action="formAlterarFuncionario.php" method="Post">
          <input type="hidden" name="codFuncionarioalterar" value="<?=$funcionario['codFun']?>">
          <button type="submit" class="btn-small btn-danger"> Alterar</button>
        </form>
      </td>
    </tr>
<?php
endforeach;
?>
  </tbody>
</table>





<?php
include_once("footer.php");
?>