<?php 

$cor = [];
$cor  [] = "Yellow";
$cor  [] = "Green";
$cor  [] = "Blue";
$cor  [] = "Pink";
$cor  [] = "Red";
$cor  [] = "Purple";
$cor  [] = "Orange";
$cor  [] = "Gray";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php 
 
foreach ($cor as $key => $cor) {
    echo "<a href= 'atividade.php?cor=$cor'>Mudar para $cor</a>";
        }
    


?>

</body>
</html>

