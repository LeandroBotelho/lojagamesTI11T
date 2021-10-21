<?php

include("../models/conexao.php");
include("../models/bancoUsuarios.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);


if(alterarUsuario($conexao,$codigoUsu,$emailUsu,$senhaUsu,$pinUsu)){
    echo("Usuario alterado com sucesso");
}else{
    echo("Usuario não alterado.");
}
    
include("../views/footer.php");
?>
