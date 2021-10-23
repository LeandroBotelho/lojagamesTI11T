<?php

include("../models/conexao.php");
include("../models/bancoUsuarios.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);


if(inserirUsuarios($conexao,$emailusu,$senhausu,$pinusu)){
    echo("Usuario cadastrado com sucesso");
}else{
    echo("Usuario não cadastrado.");
}
    
include("../views/footer.php");
?>
