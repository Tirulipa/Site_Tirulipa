<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Enviado com sucesso</title>
	  <?php include 'css/css.html'; ?>
	</head>
	<body>
		<div class="form">
			<h1><?= 'Enviado com sucesso'; ?></h1>
			<p>
				<?php 
				if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
					echo $_SESSION['message'];    
				else:
					header( "location: index.php" );
				endif;
				?>
			</p>
			<a href="tela_login.php"><button class="button button-block"/>Voltar</button></a>
		</div>
	</body>
</html>
