<?php
	session_start();
	session_unset();
	session_destroy(); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Desconectado</title>
		<?php include 'css/css.html'; ?>
	</head>
	<body>
		<div class="form">
			<h1>Desconectado com sucesso</h1>

			<p><?= 'Você foi desconectado!'; ?></p>

			<a href="index.php"><button class="button button-block"/>voltar</button></a>
		</div>
	</body>
</html>
