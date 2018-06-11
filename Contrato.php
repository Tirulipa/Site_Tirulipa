<!DOCTYPE html>
<html lang="br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tirulipa Safe</title>
			
		<!-- Favicons -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

		<!-- Slider -->
		<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
		<link href="css/owl.theme.css" rel="stylesheet" media="screen">

		<!-- Stylesheet -->
		<link rel="stylesheet" type="text/css"  href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/main1.css" />
		
		<style>
			body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
			.w3-row-padding img {margin-bottom: 12px}
			/* Set the width of the sidebar to 120px */
			.w3-sidebar {width: 120px;background: #222;}
			/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
			#main {margin-left: 120px}
			/* Remove margins from "page content" on small screens */
			@media only screen and (max-width: 600px) {#main {margin-left: 0}}
		</style>

		<script type="text/javascript" src="js/modernizr.custom.js"></script>
	</head>
	<body>
	<!-- Menu Lateral -->
	<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
		<a class="navbar-brand" href="index.html"><img src="img/LogoTitle.png" style="width:100%">
		<a href="Usuario.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-home w3-xxlarge"></i>
			<p>Home</p>
		</a>
		<a href="Contrato.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-file-o w3-xxlarge" aria-hidden="true" ></i>
			<p>Contrato</p>
		</a>
		<a href="upgrade.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-check-circle w3-xxlarge" aria-hidden="true"></i>
			<p>Upgrade</p>
		</a>
		<a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-power-off w3-xxlarge" aria-hidden="true"></i>
			<p>Sair</p>
		</a>
	</nav>

	<!-- Navbar p/ small screen -->
	<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
		<div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
			<a href="Usuario.html" class="w3-bar-item w3-button" style="width:25% !important">Home</a>
			<a href="Contrato.html" class="w3-bar-item w3-button" style="width:25% !important">Contrato</a>
			<a href="upgrade.html" class="w3-bar-item w3-button" style="width:25% !important">Upgrade</a>
			<a href="index.html" class="w3-bar-item w3-button" style="width:25% !important">Sair</a>
		</div>
	</div>

	<!-- Page Content -->
	<div class="w3-padding-large" id="main">
		
		<!-- Header/Home  -->
		  
		<header class="w3-container w3-padding-32 w3-center "  id="home1">
			<h1 class="w3-jumbo" style="color:#E5E5E5">Tirulipa Safe</h1>
		</header>
		  
		<!-- Tipos de Seguro(Boxes) -->
		<div id="main">
			<div class="inner">
				<div class="thumbnails">
					<div class="box">
						<a href="#" class="image fit"><img src="img/segprat.jpg" alt="" /></a>
						<div class="inner">
							<h3>Seguro Prata</h3>
							<p>Descrição do tipo do seguroDescrição do tipo do seguro.Descrição do tipo do seguro</br>Preço: R$999,99</p>
							<a href="FormSeg.php" class="button style2 fit" data-poptrox="youtube,800x400">Assinar</a>
						</div>
					</div>
					<div class="box">
						<a href="#" class="image fit"><img src="img/03.jpg" alt="" /></a>
						<div class="inner">
							<h3>Seguro Ouro</h3>
							<p>Descrição do tipo do seguroDescrição do tipo do seguro.Descrição do tipo do seguro</br>Preço: R$9.999,99</p>
							<a href="FormSeg.php" class="button style3 fit" data-poptrox="youtube,800x400">Assinar</a>
						</div>
					</div>
					<div class="box">
						<a href="#" class="image fit"><img src="img/segouro1.jpg" alt="" /></a>
						<div class="inner">
							<h3>Seguro Premium</h3>
							<p>Descrição do tipo do seguro.Descrição do tipo do seguroDescrição do tipo do seguro</br>Preço: R$99.999,99</p>
							<a href="FormSeg.php" class="button fit" data-poptrox="youtube,800x400" >Assinar</a>
						</div>
					</div>
					<div class="box">
						<a href="#" class="image fit"><img src="img/segouro.jpg" alt="" /></a>
						<div class="inner">
							<h3>Seguro Luxy</h3>
							<p>Descrição do tipo do seguroDescrição do tipo do seguro.Descrição do tipo do seguro</br>Preço: R$999.999,99</p>
							<a href="FormSeg.php" class="button style2 fit" data-poptrox="youtube,800x400">Assinar</a>
						</div>
					</div>
					<div class="box">
						<a href="#" class="image fit"><img src="img/segpremium.png" alt="" /></a>
						<div class="inner">
							<h3>Seguro Platinum</h3>
							<p>Descrição do tipo do seguroDescrição do tipo do seguro.Descrição do tipo do seguro</br>Preço: R$1.000.000,00</p>
							<a href="FormSeg.php" class="button style3 fit" data-poptrox="youtube,800x400">Assinar</a>
						</div>
					</div>
					<div class="box">
						<a href="#" class="image fit"><img src="img/02.png" alt="" /></a>
						<div class="inner">
							<h3>Seguro Ultra</h3>
							<p>Descrição do tipo do seguro.Descrição do tipo do seguroDescrição do tipo do seguro</br>Preço: R$9.999.999,99</p>
							<a href="FormSeg.php" class="button fit" data-poptrox="youtube,800x400" >Assinar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript -->
	<script src="assets/js/jquery1.min.js"></script>
	<script src="assets/js/jquery1.scrolly.min.js"></script>
	<script src="assets/js/jquery1.poptrox.min.js"></script>
	<script src="assets/js/skel1.min.js"></script>
	<script src="assets/js/util1.js"></script>
	<script src="assets/js/main1.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>