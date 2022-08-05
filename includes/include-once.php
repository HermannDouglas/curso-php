<div class="titulo">Include Once</div>

<?php
include('include-once-arquivo.php');
// require('include-once-arquivo.php');

echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include('include-once-arquivo.php');
echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada Novamente';
echo "Variável = '{$variavel}'.<br>";

include_once('include-once-arquivo.php');
echo "Variável = '{$variavel}'.<br>";

require_once('include-once-arquivo.php');
echo "Variável = '{$variavel}'.";

?>