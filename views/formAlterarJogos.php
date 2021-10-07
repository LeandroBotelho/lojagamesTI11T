<?php
include("../views/header.php");
?>
<form method="Post" action="../controllers/inserirJogos.php">
<?php
$codjogo = $_POST["codJogalterar"];


?>
    <P>Jogo <input type="text" name="jogo"></P>
    <p>Tamanho do jogo <input type="text" name="tamanho"></p>
    <p>Preço<input type="text" name="preco"></p>
    <p>Requisitos do Jogo <input type="text" name="requisitos"></p>
    <P>Console <input type="text" name="console"></P>
    <p>Classificação <input type="text" name="classificacao"></p>
    <p>Avaliação do Jogo <input type="text" name="avaliacao"></p>
    <button type="submit">Salvar</button>
</form>
<?php
include("../views/footer.php");
?>