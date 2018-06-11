<?php
	$email = $mysqli->escape_string($_POST['email']);
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
	
	if ( $result->num_rows == 0 ){ // Usuário não existe
		$_SESSION['message'] = "O usuário com esse email não existe!";
		header("location: error.php");
	}
	else { // Usuário existe
		$user = $result->fetch_assoc();
		if ( password_verify($_POST['password'], $user['password']) ) {

			$_SESSION['email'] = $user['email'];
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['last_name'] = $user['last_name'];
			$_SESSION['active'] = $user['active'];

			// É assim que saberemos que o usuário está logado
			$_SESSION['logged_in'] = true;
			header("location: profile.php");
		}
		else {
			$_SESSION['message'] = "Você digitou a senha errada, tente novamente!";
			header("location: error.php");
		}
	}
?>