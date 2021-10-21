<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoUsuarios.php");
?>

<div class="container m-5  p-5">
    <form action="listaTudoUsuCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Digite o codigo do usuario</label>
            <div class="col-sm-3">
                <input type="number" required name="CodUsu" class="form-control" id="inputEmail3">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
    </form>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">E-mail</th>
            <th scope="col">Senha</th> 
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $codUsuarios = isset($_GET['CodUsu']) ? $_GET['CodUsu'] : 0;

        if ($codUsuarios > 0) {
            $usuarios = listaTudoUsuCod($conexao, $codUsuarios);

        ?>

            <tr>
                <th scope="row"><?= $usuarios['codUsu'] ?></th>
                <td><?= $usuarios['emailUsu'] ?></td>
                <td><?= $usuarios['senhaUsu'] ?></td>
                <td>
                    <form action="../controllers/" method="Post">
                        <input type="hidden" name="codUsudeletar" value="<?=$jogo['codJog']?>">
                        <button type="submit" class="btn-small btn-danger">X</button>
                    </form>
                </td>
                <td>
                    <form action="formAlterarJogos.php" method="Post">
                        <input type="hidden" name="codUsualterar" value="<?=$jogo['codJog']?>">
                        <button type="submit" class="btn-small btn-danger">Alterar </button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>


    </tbody>
</table>


<?php
include_once("footer.php");
?>