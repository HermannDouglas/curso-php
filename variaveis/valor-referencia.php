<div class="titulo">Valor vs Referência</div>

<?php
    $variavel = 'valor inicial';
    echo $variavel; 
    
    // Atribuição por valor
    $variavelValor = $variavel;
    echo "<br>$variavelValor";
    $variavelValor = 'novo valor';
    echo "<br>$variavelValor";
    echo " $variavel"; 
    
    // Atribuição por Referência
    $variavelReferencia = &$variavel;
    $variavelReferencia = "mesma referência";
    echo "<br>$variavelReferencia $variavel";
?>