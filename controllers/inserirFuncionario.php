<?php
include("../models/conexao.php");
include("../models/bancoFuncionarios.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirFuncionario($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun)){
    echo("Usuario cadastrado com sucesso");
}else{
    echo("Usuario não cadastrado.");
}

include("../views/footer.php");