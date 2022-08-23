<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql)->fetchAll();
// Continuar...
print_r($resultado);

?>