<div class="titulo">Recursividade</div>

<?php
    function somaAteUm($numero){
        $soma = 0;
        for($i=1;  $i<=$numero; $i++){
            $soma += $i;
        }
        return $soma;
    }

    echo somaAteUm(5) . '<br>';

    function somaRecursivaAteUm($numero){
        if($numero === 1){ // Condição de Parada
            return 1;
        } else {
            return $numero + somaRecursivaAteUm($numero - 1);
        }
    }

    echo somaRecursivaAteUm(5) . '<br>';
    
    function somaRecursivaEconomica($numero){
        return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
    }
    
    echo somaRecursivaEconomica(5) . '<br>';

?>