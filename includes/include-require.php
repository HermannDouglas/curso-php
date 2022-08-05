<div class="titulo">Include vs. Require</div>

<?php
echo 'Usando include com arquivo inexistente...<br>';
include('arquivo-inexistente.php');
echo 'Usando require com arquivo inexistente...<br>';
require('arquivo-inexistente.php');
echo 'Não achou mesmo...<br>';
?>