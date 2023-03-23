<?php
if(isset($_GET['n1']) && isset($_GET['n2'])){
$resultado = $_GET['n1'] + $_GET['n2'];
echo "O resultado da soma é $resultado";
}else{
    //echo "Você precisa informar os valores para somar";
    header("Location: form1.html");
}

?>