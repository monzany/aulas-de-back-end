<?php
if(isset($_POST['n1']) && isset($_POST['n2'])){
$resultado = $_POST['n1'] + $_POST['n2'];
echo "O resultado da soma é $resultado";
}else{
    //echo "Você precisa informar os valores para somar";
    header("Location: form1.html");
}

?>