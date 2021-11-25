<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoUsuario.php");

?>
<div class="container m-5 p-5">
    <form action="cadastroFuncionarios.php" method="Post">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do Usuário: </label>
            <div class="col-sm-3">
                <input type="number" required name="CodUsuario"  class="form-control" id="inputCodigo">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>

    </form>
</div>
<?php
$CodUsuario = isset($_POST['CodUsuario'])?$_POST['CodUsuario']:0;
$usuario =  listaTudoUsuarioCod($conexao,$CodUsuario);

if($usuario){

?>

<form method="Post" action="../controllers/inserirFuncionario.php">
        <p>Código Usuário: <input type="text" name="codUsuFK" readonly value="<?=$usuario['codUsuFK']?>"></p>
        <p>Nome <input type="text" name="nome"></p>
        <p>CPF<input type="Text" name="cpf"></p>
        <p>Fone<input type="Text" name="fone"></p>
        <p>Data Nascimento<input type="date" name="datanasc"></p>
        <button type="submit">Salvar</button>
    </form>

<?php
}
include_once("footer.php");
?>