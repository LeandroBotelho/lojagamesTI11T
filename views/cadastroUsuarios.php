<?php
include("../views/header.php");
?>
    <form method="Post" action="../controllers/inserirUsuarios.php">
<P> E-mail <input type="email" name="emailusu" required></P>
<p> Senha <input type="password" name="senhausu" required></p>
<p>PIN<input type="text" name="pinusu"></p>
<button type="submit"> Salvar </button>
    </form>
<?php
include("../views/footer.php");
?>