<?php
$vetor = array("Murilo", 4, 3);
$media = ($vetor[1] + $vetor[2]) / 2;
$vetor[3] = $media;
if ($media >= 6) {
$vetor[4] = "Aprovado";
} else {
$vetor[3] = "Reprovado";
}
var_dump($vetor)
?>
