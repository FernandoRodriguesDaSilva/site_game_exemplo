<link rel="stylesheet" type="text/css" href="css/detalhe.css">
<!-- Segurança de login na página -->
<?php
session_start();
if (!isset($_SESSION["user_portal"])) {
	Header("Location:login.php");
}
// Determinar localidade BR
setlocale(LC_ALL, 'pt_BR');
// Se pegar o id pelo produto entra
if (isset($_GET["codigo"])) {
	$produto_id = $_GET["codigo"];
	// Se não pegar id pelo produto volta pra home
} else {
	Header("Location: login.php");
}
// Consulta ao banco de dados
$consulta = "SELECT * ";
$consulta .= "FROM produtos ";
$consulta .= "WHERE produtoID = {$produto_id} ";
$detalhe = mysqli_query($conecta, $consulta);
// Testar erro
if (!$detalhe) {
	die("Falha no Banco de Dados");
} else {
	$dados_detalhe = mysqli_fetch_assoc($detalhe);
	$produtoID = $dados_detalhe["produtoID"];
	$nomeproduto = $dados_detalhe["nomeproduto"];
	$descricao = $dados_detalhe["descricao"];
	$frete = $dados_detalhe["frete"];
	$precounitario = $dados_detalhe["precounitario"];
	$imagemgrande = $dados_detalhe["imagemgrande"];
}
?>
<?php include_once "incluir/header.php";?>
<div class="banner">
    <div class="bnr2"></div>
</div>
<main>
    <ul>
        <li><img src="<?php echo $imagemgrande ?>" alt=""></li>
        <li><h2><?php echo $nomeproduto ?></h2></li>
        <li><b>Descrição: </b><?php echo $descricao ?></li>
        <li><b>Valor do Frete: </b><?php echo $frete ?></li>
        <li><b>Valor do produto: </b><?php echo "R$ " . $precounitario ?></li>
    </ul>
</main>
<?php include_once "incluir/footer.php";?>
</body>
</html>
