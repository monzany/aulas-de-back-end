<pre>
<?php
$aluno1 = array(
    "nome" => "poliana",
    "nota1" => "7",
    "nota2" => "9"
);
$aluno2 = array(
    "nome" => "murilo",
    "nota1" => "8",
    "nota2" => "5"
);
$aluno3 = array(
    "nome" => "andre",
    "nota1" => "6",
    "nota2" => "7"
);

$dados = [$aluno1, $aluno2, $aluno3];

    foreach ($dados as $key => $value){
    echo $value["nome"] . "|". $value["nota1"] . "|" .$value["nota2"] . "<br>";
    }
?>
</pre>