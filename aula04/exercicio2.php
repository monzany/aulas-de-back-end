<h2>Exercício 2</h2>

<p>
    Crie um vetor com os nomes, conforme exemplo abaixo:
        <pre>
          --------- 
       0 |Murilo   | 
          --------- 
       1 |Poliana  |
          --------- 
       2 |Dalva    |
          --------- 
       3 |Lavinia  |
          --------- 
       4 |Kaua     |
          --------- 
    </pre>
</p>
<p>
    Imprima os nomes do vetor em formato de lista ordenada, utilizando um laço de repetição: ex:
        <br>
        1. Murilo <br>
        2. Poliana <br>
        3. .... <br>
</p>

<pre>
<?php
   $nome = ["Murilo","Poliana","Dalva","Lavinia","Kaua"];

echo "<ol>";
   for($i=0; $i<=4; $i++){
      echo "<li>" . $nome[$i] . "</li>";
}
echo "</ol>";
?>
</pre>