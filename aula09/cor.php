<?php

    session_start();
    
   
    if(isset($_POST['cor'])) {
        $cor = $_POST['cor'];
        $_SESSION['cor'] = $cor;
    } else {
       
        $_SESSION['cor'] = 'white';
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de mudança de cor</title>
	<meta charset="UTF-8">
	<style>
		body {
			background-color: <?php echo $_SESSION['cor']; ?>;
		}
	</style>
</head>
<body>
	<form method="POST" action="">
		<label for="cor">Escolha uma cor:</label>
		<select name="cor" id="cor">
			<option value="white">Branco</option>
			<option value="red">Vermelho</option>
			<option value="green">Verde</option>
			<option value="blue">Azul</option>
		</select>
		<button type="submit">Enviar</button>
	</form>
</body>
</html>