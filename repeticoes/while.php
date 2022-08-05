<div class="titulo">While / Do While</div>

<?php
    const VALOR_LIMITE = 5;
    $contador = 0;
    
    while($contador < VALOR_LIMITE){
        echo "While $contador<br>";
        $contador++;
    }
    echo "<hr>";
    
    $contador = 0;
    do {
        echo "Do-While $contador<br>";
        $contador++;
    } while($contador < VALOR_LIMITE);
    echo "<hr>";
    
    $contador = 0;
    while(true){
        echo "While(true) $contador<br>";
        $contador++;
        if($contador >= VALOR_LIMITE) break;
    }
    
?>