<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('return-usado.php');
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>';

$valorRetornado2 = require(__DIR__ . '/return-nao-usado.php');
// var_dump($valorRetornado2);
echo "$valorRetornado2<br>";
echo "$variavelDeclarada<br>";
?>