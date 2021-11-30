<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código Usuário</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data Nascimento</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php 
$clientes = listaTudoClientes($conexao);
foreach($clientes as $cliente):
?>
  <tr>
      <th scope="row"><?=$cliente['codCli']?></th>
      <td><?=$cliente['nomeCli']?></td>
      <td><?=$cliente['cpfCli']?></td>
      <td><?=$cliente['foneCli']?></td>
      <td><?=$cliente['datanasCli']?></td>
      <td>
        <form action="../controllers/deletarUsuario.php" method="Post">
          <input type="hidden" name="codUsuariodeletar" value="<?=$cliente['codCli']?>">
          <button type="submit" class="btn-small btn-danger"> X </button>
        </form>
      </td>
      <td>
        <form action="formAlterarUsuario.php" method="Post">
          <input type="hidden" name="codUsuarioalterar" value="<?=$cliente['codCli']?>">
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