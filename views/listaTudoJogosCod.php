<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoJogos.php");
?>

<div class="container m-5  p-5">
    <fornm action="" method="">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Digite o codigo do Jogo</label>
            <div class="col-sm-3">
                <input type="number" required class="form-control" id="inputEmail3">
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
    </fornm>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Jogo</th>
            <th scope="col">Console</th>
            <th scope="col">Preço</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $jogos = listaTudoJogos($conexao);
        foreach ($jogos as $jogo) :
        ?>

            <tr>
                <th scope="row"><?= $jogo['codJog'] ?></th>
                <td><?= $jogo['nomeJog'] ?></td>
                <td><?= $jogo['consoleJog'] ?></td>
                <td><?= $jogo['precoJog'] ?></td>
            </tr>

        <?php
        endforeach;
        ?>

    </tbody>
</table>


<?php
include_once("footer.php");
?>