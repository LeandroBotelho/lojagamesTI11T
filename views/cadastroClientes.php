<?php
include("../views/header.php");
?>
<form method="Post" action="../controllers/inserirClientes.php" style="border:1px solid black ; padding:20px;">
    <P>Nome: <input type="text" name="nomecli"></P>
    <p>CPF: <input type="text" name="cpfcli"></p>
    <p>Telefone: <input type="text" name="fonecli"></p>
    <p>Data de nascimento: <input type="date" name="datanascli"></p>
    
    <button type="submit">Salvar</button>
</form>
<?php
include("../views/footer.php");
?>