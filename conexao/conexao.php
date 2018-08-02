<!-- Abrindo conexão com banco de dados -->
<?php
$conecta = mysqli_connect("localhost", "root", "ferex", "game");
// Testando a conexão
if (mysqli_connect_errno()) {
	die("Conexao falou: " . mysqli_connect_errno());
}
?>