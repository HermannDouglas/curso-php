<div class="titulo">Argumentos Variáveis</div>

<?php
    function soma($a, $b){
        return $a + $b;
    }

    echo soma(14, 15) . '<br>';
    echo soma(5, 6, 4) . '<br>';

    function somaCompleta(...$numeros){
        // print_r($numeros);
        $soma = 0;
        foreach($numeros as $numero){
            $soma += $numero;
        }
        return $soma;
    }

    echo somaCompleta(1, 2, 3, 4, 5);
    echo "<br>";
    $array = [6, 7, 8];
    echo somaCompleta(...$array);
    echo "<hr>";

    function membros($titular, ...$dependentes){
        echo "Titular: $titular<br>";
        if($dependentes){
            foreach($dependentes as $dependente){
                echo "Dependente: $dependente<br>";
            }
        }
    }
    
    echo "<br>";
    membros('Ana Silva', 'Pedro', 'Rafaela', 'Amanda');
    echo "<br>";
    $dependentesDoRoberto = ['Leandro', 'Alice', 'Carlos'];
    membros('Roberto', ...$dependentesDoRoberto);


?>