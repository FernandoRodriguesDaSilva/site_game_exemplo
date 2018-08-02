<?php require_once "../conexao/conexao.php";?>
<!-- Iniciando variavel de sessão se não tiver feito logado volta pra pagina de login -->
<?php
session_start();
if (!isset($_SESSION["user_portal"])) {
	header("location:login.php");
}
// Determina localidade BR
setlocale(LC_ALL, 'pt_BR');
?>
<!-- Css dessa página -->
<link rel="stylesheet" type="text/css" href="css/shop.css">
<!-- Consultando banco de dados -->
<?php
$produtos = "SELECT produtoID, nomeproduto, descricao, frete, precounitario,imagempequena";
$produtos .= " FROM produtos ";
// Fazendo um filtro de pesquisa se está configurado o get(produto), adiciona na variavel nome_produto .... concatena com os objetos anteriores $produtos
if (isset($_GET["produto"])) {
	$nome_produto = $_GET["produto"];
	$produtos .= "WHERE nomeproduto LIKE '%{$nome_produto}%' ";
} else {

}

$resultado = mysqli_query($conecta, $produtos);
// Testando erro de conexão com banco
if (!$resultado) {
	die("Falha no banco de dados novamente");
}
?>

<?php include_once "incluir/header.php"?>
<!-- banner -->
<div class="banner">
	<div class="bnr2">
	</div>
</div>

<main>
	<div id="janela_pesquisa">
		<form action="shop.php" method="get" accept-charset="utf-8">
			<input type="text" name="produto" placeholder="pesquisa ...">
			<input type="image" src="images/botao_search.png">
		</form>
	</div>
</main>
<!---->
<div class="gallery">
	<div id="detalhe_produto" class="card-group" style="width: 18rem;">
		<?php while ($linha = mysqli_fetch_assoc($resultado)) {?>
			<!-- Configurando cada botão codigoID -->
			<a href="detalhe.php?codigo=<?php echo $linha['produtoID'] ?>">
				<img src="<?php echo $linha["imagempequena"] ?>">
			</a>
			<div class="card-body">
				<h2 class="card-title">
					<?php echo $linha["nomeproduto"] ?>
				</h2>
				<p class="card-text text-center descricao">
					<?php echo $linha["descricao"] ?>

				</p>
			</div>
			<ul>
				<li class="list-group-item">
					<?php echo $linha["frete"] ?>
				</li>
				<li class="list-group-item">
					Valor compra:<?php echo "R$ " . $linha["precounitario"] ?>
				</li>
			</ul>
			<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<!-- Configurando cada botão codigoID -->
				<a href="detalhe.php?codigo=<?php echo $linha['produtoID'] ?>">
					<button  class="btn btn-primary" align="center">
						Ver mais ...
					</button>
				</a>
			</div>
			<?php
}
?>
	</div>
</div>

<script src="js/lightbox-plus-jquery.min.js"></script>
<!-- footer -->
<?php include_once "incluir/footer.php";?>
<?php
// Fechar conexao
mysqli_close($conecta);
?>