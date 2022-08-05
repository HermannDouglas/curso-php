<div class="titulo">Atribuições</div>

<?php
    $title = "Atribuições";

    $numero = 10;
    echo $numero;
    $numero = $numero - 3;
    echo "<br>", $numero;
    $numero = $numero + 1.5;
    echo "<br>" . $numero;
    $numero--;
    echo "<br>", $numero;
    --$numero;
    echo "<br>", $numero;
    $numero++;
    echo "<br>", $numero;
    ++$numero;
    echo "<br>", $numero;
    $numero -= 4.75;
    echo "<br>", $numero;
    $numero += 4.5;
    echo "<br>", $numero;
    $numero *= 5;
    echo "<br>", $numero;
    $numero /= 3;
    echo "<br>", $numero;
    $numero %= 5;
    echo "<br>", $numero;
    $numero **= 2;
    echo "<br>", $numero;
    $numero .= 5; // Apenas concatenação
    echo "<br>", $numero;

    $texto =   "Esse é um texto";
    echo "<br>" . $texto;
    $texto = $texto . " qualquer";
    echo "<br>" . $texto;
    $texto .= " de verdade!";
    echo "<br>" . $texto;

    // $variavelInexistente = "Valor existente";
    echo "<br>";
    var_dump($variavelInexistente);
    $valor = $variavelInexistente ?? "Valor default";
    echo "<br>" . $valor;
    
?>