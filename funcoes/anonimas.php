<div class="titulo">Funções Anônimas</div>

<?php
    $soma = function ($a, $b){
        return $a + $b;
    };

    $multiplicacao = function($a, $b){
        return $a * $b;
    };

    $subtracao = function($a, $b){
        return $a - $b;
    };

    $divisao = function($a, $b){
        return $a / $b;
    };

    echo $soma(1, 2) . '<br>';
    // Função executora
    function executar($a, $b, $op, $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    executar(2, 3, '+', $soma) . '<br>';
    executar(2, 3, '*', $multiplicacao) . '<br>';
    executar(2, 3, '-', $subtracao) . '<br>';
    executar(9, 3, '/', $divisao) . '<br>';
?>