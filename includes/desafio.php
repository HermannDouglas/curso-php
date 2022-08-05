<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');

$usuario = new Usuario('Hermann', 29, 'hermann.almeida');
echo $usuario->apresentar();
unset($usuario);

?>