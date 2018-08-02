<?php require_once "../conexao/conexao.php";?>
<!-- Iniciando variavel de sessão se não tiver feito  -->
<?php
session_start();
?>
<!-- Se estiver configurado usuario e senha faça -->
<?php if (isset($_POST["usuario"])) {
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	// fazer a consulta ao banco de dados entre usuario e senha
	$login = "SELECT * ";
	$login .= "FROM clientes ";
	$login .= "WHERE usuario = '{$usuario}' and senha = '{$senha}' ";
	// Acessando banco de dados
	$acesso = mysqli_query($conecta, $login);
	// testando conexão se não acessar mostra falha na consulta ao banco
	if (!$acesso) {
		die("Falha na consulta ao banco");
	}
	$informacao = mysqli_fetch_assoc($acesso);
	if (empty($informacao)) {
		$mensagem = "login sem sucesso.";
	} else {
		//Iniciar a variavel de sessão pelo clienteID do banco de dados
		$_SESSION["user_portal"] = $informacao["clienteID"];
		header("location: home.php");
	}
}
?>

<?php include_once "incluir/header.php";?>
<!-- banner -->
<div class="banner">
	<div class="bnr2">
	</div>
</div>
<main>
	<div id="janela_login">
		<form action="login.php" method="post" accept-charset="utf-8">
			<input type="text" name="usuario" placeholder="Usuário">
			<input type="password" name="senha" placeholder="Senha">
			<input type="submit" value="login">
		</form>
	</div>
</main>

<!-- Se os dados estiverem errado exibe mensagem -->
<?php if (isset($mensagem)) {?>
	<p style="color: red; font-size: 1.5em; font-weight: 700; margin-bottom: 2em;" class="text-center"><?php echo $mensagem ?></p>
<?php }?>


<!-- footer -->
<?php include_once "incluir/footer.php";?>
<?php// Fechar conexao
    mysqli_close($conecta);
?>
</main>

<?php include_once "incluir/footer.php";?>
