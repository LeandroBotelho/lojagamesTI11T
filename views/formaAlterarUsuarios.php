<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoUsuarios.php");
?>
<form method="Post" action="../controllers/alterarUsuario.php">
    <?php
    $codUsuario = $_POST["codUsualterar"];
    $usuario = listaTudoUsuCod($conexao, $codUsuario);
    ?>

    <P>Código <input type="text" name="codigoUsu" value="<?= $usuario['codUsu'] ?>"></P>
    <P>E-mail <input type="text" name="emailUsu" value="<?= $usuario['emailUsu'] ?>"></P>
    <p>Senha do usuario <input type="text" name="senhaUsu" value="<?= $usuario['senhaUsu'] ?>"></p>
    <P>PIN <input type="text" name="pinUsu" value="<?= $usuario['pinUsu'] ?>"></P>
    <button type="submit">Salvar</button>
</form>
<?php
include("../views/footer.php");
?>