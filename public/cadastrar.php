<?php require_once "../conexao/conexao.php";?>
<!-- Inserir dados no banco -->
<?php
if (isset($_POST["nomecompleto"])) {
	$nome = utf8_decode($_POST["nomecompleto"]);
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	$email = $_POST["email"];
	$endereco = $_POST["endereco"];
	$cidade = $_POST["cidade"];
	$cep = $_POST["cep"];
	$telefone = $_POST["telefone"];

	$inserir = "INSERT INTO clientes ";
	$inserir .= "(nomecompleto,usuario,senha,email,endereco,cidade,cep,telefone) ";
	$inserir .= "VALUES ";
	$inserir .= "('$nome','$usuario','$senha','$email','$endereco','$cidade','$cep','$telefone') ";

	$operacao_inserir = mysqli_query($conecta, $inserir);
	if (!$operacao_inserir) {
		die("erro ao acessar o banco");
	}
}
?>
<?php include_once "incluir/header.php";?>
<link rel="stylesheet" type="text/css" href="css/crud.css">
<!-- banner -->
<div class="banner">
	<div class="bnr2">
	</div>
</div>
<!---->
<main>
	<div id="janela_formulario">
		<form action="cadastrar.php" method="post" accept-charset="utf-8">
			Digite um usuário:
			<input type="text" name="usuario" placeholder="Nome de usuário"><br>
			Digite uma senha:
			<input type="text" name="senha" placeholder="Digite uma senha"><br>
			Seu email:
			<input type="text" name="email" placeholder="Digite E-mail"><br>
			Seu nome completo:
			<input type="text" name="nomecompleto" placeholder="Nome completo"><br>
			Seu endereço:
			<input type="text" name="endereco" placeholder="endereço"><br>
			Sua cidade:
			<input type="text" name="cidade" placeholder="Cidade"><br>
			Seu cep:
			<input type="text" name="cep" placeholder="cep"><br>
			Digite um telefone:
			<input type="text" name="telefone" placeholder="celular"><br>
			<input type="submit" value="inserir">
		</form>
	</div>
</main>
<!-- footer -->
<?php include_once "incluir/footer.php";?>