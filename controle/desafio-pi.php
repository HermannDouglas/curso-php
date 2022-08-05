<div class="titulo">Desafio Pi</div>

<?php 
    echo pi();
    $pi = 3.14;
    var_dump($pi <=> pi());

    if($pi === pi()){
        echo "<br>Iguais.";
    }else{
        echo "<br>Diferentes.";
    }

    // Operador relacional
    $piErrado = 2.8;

    // Resposta
    echo "<br>" . ($pi - pi());
    echo "<br>" . ($pi - $piErrado);

    if(($pi - pi()) <= 0.01){
        echo "<br>Praticamente iguais.";
    }
    
    if(($pi - $piErrado) <= 0.01){
        echo "<br>Praticamente iguais.";
    }else{
        echo "<br>Valor errado!";
    }

?>