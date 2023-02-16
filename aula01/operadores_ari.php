<h2>Operadores Arimeticos</h2>
<hr>

<p>
    São utilizados para realizar calculos 
    matematicos.
</p>>

<table border=1 width="100%">
    <thead>
    <tr>
        <td>Operador</td>
        <td>Descrição</td>
        <td>Exemplos</td>
    </tr>
    </thead>
    <tr>
    <tbody>    
        <td>+</td>
        <td>soma</td>
        <td>$soma = 10 + 5;</td>
    </tr>
    <tr>
        <td>-</td>
        <td>subtração</td>
        <td>$sub = 10 - 5;</td>
    </tr>
    <tr>
        <td>/</td>
        <td>divisão</td>
        <td>$div = 10 / 5;</td>
    </tr>
    <tr>
        <td>*</td>
        <td>multiplicação</td>
        <td>$multi = 10 * 5;</td>
    </tr>
    <tr>
        <td>%</td>
        <td>resto da divisão</td>
        <td>$resto = 10 % 5;</td>
    </tr>
    <tr>
        <td>**</td>
        <td>potenciação</td>
        <td>$pot = 10 ** 5;</td>
    </tr>
    </tbody>
</table>

<?php
    $soma = 10 + 5;
    $sub = 10 - 5;
    $div = 10 / 5;
    $multi = 10 * 5;
    $resto = 10 % 5;
    $pot = 10 ** 5;

    echo "soma $soma";
    echo "subtração $sub"; 
    echo "divisão $div";
    echo "multiplicação $mult";
    echo "resto da divisão $resto";
    echo "potenciação $pot";