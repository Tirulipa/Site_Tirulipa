<?php
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['first_name'] = $_POST['firstname'];
	$_SESSION['last_name'] = $_POST['lastname'];

	$first_name = $mysqli->escape_string($_POST['firstname']);
	$last_name = $mysqli->escape_string($_POST['lastname']);
	$email = $mysqli->escape_string($_POST['email']);
	$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
	$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
		  
	// Check se o email exists
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

	// Se retornar 0 ele existe
	if ( $result->num_rows > 0 ) {

		$_SESSION['message'] = 'Já existe usuário com este endereço de email!';
		header("location: error.php");

	}
	
	else { 
		$sql = "INSERT INTO users (first_name, last_name, email, password, hash) " 
		. "VALUES ('$first_name','$last_name','$email','$password', '$hash')";
		
	if ( $mysqli->query($sql) ){
		$_SESSION['active'] = 0; 
		$_SESSION['logged_in'] = true; 
		$_SESSION['message'] =

		"Cadastro realizado com sucesso!";
		
		$to      = $email;
        $subject = 'Account Verification ( clevertechie.com )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: profile.php"); 
	}
	
	else {
		$_SESSION['message'] = 'Não foi possível realizar o cadastro!';
		header("location: error.php");
	}
}