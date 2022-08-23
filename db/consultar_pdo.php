<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_NUM);
// Continuar...
print_r($resultado);

?>