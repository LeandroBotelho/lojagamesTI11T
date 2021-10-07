<?php

function inserirJogo($conexao, $jogo, $tamanho, $preco, $requisitos, $console, $classificacao, $avaliacao)
{
    $query = "insert into tbjogos(nomeJog,tamanhoJog,precoJog,requisitosJog,consoleJog,classificacaoJog,avaliacaoJog)values('{$jogo}','{$tamanho}','{$preco}','{$requisitos}','{$console}','{$classificacao}','{$avaliacao}')";

    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function listaTudoJogos($conexao)
{
    $query = "Select * From tbjogos";

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
    nomeJog = $nomeJogo, 
    tamanhoJog = $tamanhoJog, 
    precoJog = $precoJog, 
    requisitosJog = $requisitosJog, 
    consoleJog = $consoleJog, 
    classificacaoJog = $classificacaoJog, 
    avaliacaoJog = $avaliacaoJog where codJog = $codJog";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function deletarJogos($conexao,$codJogdeletar){
    $query = "delete from tbjogos where codJog = $codJogdeletar";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}