<?php

function inserirUsuarios($conexao, $emailusu, $senhausu,$pin){
    $option = ['cost' => 8];
    $senhacrypto = password_hash($senhausu, PASSWORD_BCRYPT, $option); 

    $query = "insert into tbusuarios(emailUsu,senhaUsu,pinUsu)values('{$emailusu}','{$senhacrypto}','{$pin}')";

    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function listaTudoUsuarios($conexao){
    $query = "Select * From tbusuarios";

    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}


function listaTudoUsuCod($conexao, $codUsuario){
    $query = "Select * From tbusuarios where codUsu={$codUsuario}";
    $resultados = mysqli_query($conexao, $query);
    $resul = mysqli_fetch_array($resultados);
    return $resul;
}

function alterarUsuario($conexao,$codUsu,$emailUsu,$senhaUsu,$pinUsu){
    $query = "update tbusuarios set  
    emailUsu = '{$emailUsu}', 
    pinUsu = '{$pinUsu}',
    senhaUsu = '{$senhaUsu}' where codUsu = '{$codUsu}' ";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function deletarUsuario($conexao,$codUsudeletar){
    $query = "delete from tbusuarios where codUsu = $codUsudeletar";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}