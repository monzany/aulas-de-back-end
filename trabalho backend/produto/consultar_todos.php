<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `estudantes` ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//cria um vetor vazio
$estudantes = [];

//pega a todas as linha do resultado
while($estudante = $resultado->fetch_assoc()){
    //adiciona o produto (linha do resultado) no vetor
    $estudantes[] = $estudante;
}