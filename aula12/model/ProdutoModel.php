<?php

require_once "../conexao.php";

$sql = "INSERT INTO `produto` (`idproduto`, `nome`, `descricao`, `preco`, `foto`) VALUES (1, 'Smartphone', 'smartphone', 1500, 'semfoto');";

//Prepara o SQL para ser executado no banco de dados
$comando=$conexao->prepare($sql);

//executa o SQL - Comando no Baco de Dados
$comando->execute();