<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoFuncionarios.php");

?>
<div class="container m-5 p-5">
    <form action="../views/listaTudoFuncionarioNome.php" method="GET">
        <div class="row mb-3">
            <label for="inputNome" class="col-sm-2 col-form-label">Digite o Nome ou letra do Funcionario: </label>
            <div class="col-sm-3">
                <input type="text" required name="NomeCliente" class="form-control" id="inputNome">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>

    </form>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Cliente</th>
            <th scope="col">Função</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomeFuncionario = isset($_GET['NomeFuncionario']) ? $_GET['NomeFuncionario'] : "";

        if ($nomeFuncionario != "") {
            $Cliente = listaTudoClienteNome($conexao, $nomeFuncionario);
         
            if ($Funcionario) {
                
                foreach($Funcionario as $Funcionarios) :
        ?>
                <tr>
                    <th scope="row"><?=$Clientes["codFun"] ?></th>
                    <td><?=$Funcionarios["codUsuFK"] ?></td>
                    <td><?=$Funcionarios["nomeFun"] ?></td>
                    <td><?=$Funcionarios["funcaoFun"] ?></td>
                    <td><?=$Funcionarios["foneFun"] ?></td>
                    <td><?=$Funcionarios["datanasFun"] ?></td>
                    <td>
                        <form action="../controllers/deletarCliente.php" method="Post">
                            <input type="hidden" name="codClientedeletar" value="<?=$Funcionarios['codFun']?>">
                            <button type="submit" class="btn-small btn-danger"> X </button>
                        </form>
                    </td>
                    <td>
                        <form action="../views/formAlterarCliente.php" method="Post">
                            <input type="hidden" name="codClienteAlterar" value="<?=$Funcionarios['codFun']?>">
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
            }
        }
?>

<?php
include_once("footer.php");
?>