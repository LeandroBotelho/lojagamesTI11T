<?php

include("../models/conexao.php");
include("../models/bancoUsuarios.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);


if(inserirUsuarios($conexao,$emailUsu,$senhaUsu,$pin)){
    echo("Usuario cadastrado com sucesso");
}else{
    echo("Usuario não cadastrado.");
}
    
include("../views/footer.php");
?>
