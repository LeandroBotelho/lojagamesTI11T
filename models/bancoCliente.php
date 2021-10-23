<?php

function inserirCliente($conexao, $codigoUsuFK, $nomeCliente, $cpfCliente, $foneCliente, $datanasCliente)
{
    $query = "insert into tbclientes(codUsuFK,nomeCli,cpfCli,foneCli,datanasCli)values('{$codigoUsuFK}','{$nomeCliente}','{$cpfCliente}','{$foneCliente}','{$datanasCliente}')";

    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function listaTudoClientes($conexao)
{
    $query = "Select * From tbclientes";

    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}


function listaTudoJogosCod($conexao, $codJogo)
{
    $query = "Select * From tbjogos where codJog={$codJogo}";
    $resultados = mysqli_query($conexao, $query);
    $resul = mysqli_fetch_array($resultados);
    return $resul;
}

function alterarJogos($conexao,$codJog,$nomeJogo,$tamanhoJog,$precoJog,$requisitosJog,$consoleJog,$classificacaoJog,$avaliacaoJog)

{

    $query = "update tbjogos set 
    nomeJog = '{$nomeJogo}', 
    tamanhoJog = '{$tamanhoJog}', 
    precoJog = '{$precoJog}', 
    requisitosJog = '{$requisitosJog}', 
    consoleJog = '{$consoleJog}', 
    classificacaoJog = '{$classificacaoJog}', 
    avaliacaoJog = '{$avaliacaoJog}' where codJog = '{$codJog}' ";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function deletarJogos($conexao,$codJogdeletar){
    $query = "delete from tbjogos where codJog = $codJogdeletar";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}