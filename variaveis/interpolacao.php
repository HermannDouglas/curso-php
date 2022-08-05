<div class="titulo">Interpolação</div>

<?php
    $numero = 10;
    echo $numero;
    echo '<br> $numero';
    echo "<br> $numero";
    echo "<br>";
    $texto = "A sua nota é: $numero";
    echo $texto;
    echo "<br>";
    $objeto = "caneta";
    echo "Eu tenho 5 $objeto";
    echo "<br>";
    echo "Eu tenho 5 {$objeto}s";
    echo "<br>";
    echo "Eu tenho 5 { $objeto}s. Mas perdi 3 {$objeto}s.";
    echo "<br>";
?>