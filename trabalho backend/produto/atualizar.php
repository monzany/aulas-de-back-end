<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["idade"]) 
           && isset($_POST["curso"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_universidade.php";

$id =        $_POST["id"];        
$nome =      $_POST["nome"];
$idade = $_POST["idade"];
$curso =     $_POST["curso"];
$universidade = $nome_arquivo;

//String com o comando SQL para ser executado no DB
$sql = "UPDATE estudante SET 
`nome`= ?, `idade`= ?, `curso`= ?, `universidade`= ? 
WHERE  `idestudante`= ? ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssdsi", $nome, $idade, $curso, $universidade, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");