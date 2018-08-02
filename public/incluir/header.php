<?php require_once "../conexao/conexao.php";?>

<!DOCTYPE HTML>
<html>
<head>
	<title><?php $titulo?></title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery -->
	<script src="js/bootstrap.js"></script>
	<!-- Css -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<script src="js/jquery.min.js"></script>

</head>
<body>
	<!-- header -->
	<div class="top-banner">
		<div class="header">
			<?php
if (isset($_SESSION["user_portal"])) {
	$user = $_SESSION["user_portal"];
	$saudacao = "SELECT nomecompleto ";
	$saudacao .= "FROM clientes ";
	$saudacao .= "WHERE clienteID = {$user} ";
	$saudacao_login = mysqli_query($conecta, $saudacao);
	if (!$saudacao_login) {
		die("Falha ao acessar banco");
	}
	$saudacao_login = mysqli_fetch_assoc($saudacao_login);
	$nome = $saudacao_login["nomecompleto"];?>
				<div class="header_saudacao text-center">
					<h5>
						Bem vindo,
						<?php echo $nome ?> - <a href="sair.php">Sair</a>
					</h5>
				</div>
				<?php
}
?>
		</div>
		<div class="clearfix"></div>
		<!--banner-info-->
		<div class="banner-info">
			<div class="container">
				<div class="logo">
					<h1><a href="home.php">GAME BOX</a></h1>
				</div>
				<div class="top-menu">
					<span class="menu"></span>
					<ul class="nav1">
						<li class="active"><a href="home.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="shop.php">Shop</a></li>
						<li><a href="reviews.php">Reviews</a></li>
						<li><a href="typo.php">News</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="contact.php">Mail</a></li>
					</ul>
				</div>

				<!-- script-for-menu -->
				<script>
					$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
							// Animation complete.
						});
					});
				</script>
				<!-- /script-for-menu -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
