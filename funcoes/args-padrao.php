<div class="titulo">Argumento Padrão</div>

<?php
    function saudacao($nome='Senhor(a)', $sobrenome='Cliente'){
        return "Bem vindo, $nome $sobrenome!<br>";
    }

    echo saudacao();
    echo saudacao(NULL);
    echo saudacao(null, NULL);
    echo saudacao('Mestre', 'Supremo');
    echo "<hr>";
    
    function anotarPedido($comida, $bebida='Água'){
        echo "Para comer: $comida<br>";
        echo "Para beber: $bebida<br>";
    }
    
    anotarPedido('Hamburguer');
    anotarPedido('Pizza', 'Refrigerante');
    echo "<hr>";
    
    function anotarPedido2($bebida='Água', $comida){
        echo "Para comer: $comida<br>";
        echo "Para beber: $bebida<br>";
    }
    
    // anotarPedido2('Hamburguer');
    anotarPedido2('Refrigerante', 'Pizza');
    echo "<hr>";
?>