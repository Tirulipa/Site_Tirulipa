<?php 
	require 'db.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Logar</title>
		<?php include 'css/css.html'; ?>
	</head>
		<?php 
			if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			{
				if (isset($_POST['login'])) 
				{ 

					require 'login.php';
					
				}
				
				elseif (isset($_POST['register']))
				{ 
					
					require 'register.php';
					
				}
			}
		?>
	<body>
		<div class="form">
			<div class="tab-content">
				<div id="login">   
					<h1>Fazer Login!</h1>
					<form action="tela_login.php" method="post" autocomplete="off">
						<div class="field-wrap">
							<label>
								Email<span class="req">*</span>
							</label>
							<input type="email" required autocomplete="off" name="email"/>
						</div>
						<div class="field-wrap">
							<label>
								Senha<span class="req">*</span>
							</label>
							<input type="password" required autocomplete="off" name="password"/>
						</div>
						<p class="forgot"><a href="forgot.php">Esqueci a senha</a></p>
						<p class="tab"><a href="#signup">Registrar</a></p>	  
						<button class="button button-block" name="login" />Log In</button>	
						<p><a href="index.php">Voltar</a></p>	  						
					</form>
				</div>		  
				
				<div id="signup">   
					<h1>Registrar</h1>	  
					<form action="tela_login.php" method="post" autocomplete="off">	  
					<div class="top-row">
						<div class="field-wrap">
							<label>
								Primeiro Nome<span class="req">*</span>
							</label>
							<input type="text" required autocomplete="off" name='firstname' />
						</div>
						<div class="field-wrap">
							<label>
								Segundo Nome<span class="req">*</span>
							</label>
							<input type="text"required autocomplete="off" name='lastname' />
						</div>
					</div>
					<div class="field-wrap">
						<label>
							Email<span class="req">*</span>
						</label>
						<input type="email"required autocomplete="off" name='email' />
					</div>
					<div class="field-wrap">
						<label>
							Escolha uma senha<span class="req">*</span>
						</label>
						<input type="password"required autocomplete="off" name='password'/>
					</div>
					<p class="tab"><a href="#login">Fazer login</a></p>
					<button type="submit" class="button button-block" name="register" />Registrar</button>
					<p><a href="index.php">Voltar</a></p>
					</form>
				</div>  
			</div>
		</div>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="js/index.js"></script>
	</body>
</html>
