<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) 
           && isset($_POST["preco"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$nome =      $_POST["nome"];
$idade = $_POST["idade"];
$curso =     $_POST["curso"];
$universidade = $nome_arquivo;

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `estudante`(`nome`, `idade`, `curso`, `universidade`) 
        VALUES (?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssds", $nome, $idade, $curso, $universidade);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");

