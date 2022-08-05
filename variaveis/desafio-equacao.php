<div class="titulo">Desafio Equação</div>

<?php
    $equacao = (((((6 * (2 + 3)) ** 2) / (3 * 2)) - (((1 - 5) * (2 - 7)) / 2) ** 2) ** 3) / (10 ** 3);
    echo "Resultado: " . $equacao;
    echo "<br>";
    $numeradorA = (6 * (3 + 2)) ** 2;
    $denominadorA = 3 * 2;
    $numeradorB = (1 - 5) * (2 - 7);
    $denominadorB = 2;
    $superiorA = $numeradorA / $denominadorA;
    $superiorB = ($numeradorB / $denominadorB) ** 2;
    $superior = ($superiorA - $superiorB) ** 3;
    $inferior = 10 ** 3;
    $resultado = $superior / $inferior;
    echo $resultado;

?>