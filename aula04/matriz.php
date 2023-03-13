<h2>Matriz</h2>

<?php 
$produto1 = [
    "nome" => "Notebook",
    "marca" => "Dell",
    "preço" => "5000"
];
$produto2 = [
    "nome" => "Camera",
    "marca" => "Nikon",
    "preço" => "3000"
];
$produto3 = [
    "nome" => "SmartPhone",
    "marca" => "Apple",
    "preço" => "4800"
];
$tabela = [
    $produto1,
    $produto2,
    $produto3
];
var_dump($tabela);
echo $tabela[1]["marca"];
echo "<br><br><br><br>";
echo json_encode($tabela);
?>