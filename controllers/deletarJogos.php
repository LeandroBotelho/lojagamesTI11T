<?php

include("../models/conexao.php");
include("../models/bancoJogos.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);


if(deletarJogos($conexao,$codJogdeletar)){
    echo("Jogo deletado com sucesso");
}else{
    echo("Jogo não deletado.");
}
    
include("../views/footer.php");
?>
