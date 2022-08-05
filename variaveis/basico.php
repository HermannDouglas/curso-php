<div class="titulo">Variáveis</div>

<?php
    $numeroA = 13;
    echo "<br>";
    echo $numeroA;
    echo "<br>";
    var_dump($numeroA);
    echo "<br>";
    $a = 3;
    $b = 16;
    echo $soma = $a + $b;
    echo "<br>";
    echo isset($soma) . " " . isset($teste); // $teste é falso
    echo "<br>";
    unset($soma);
    echo "<br>";
    var_dump($soma);
    echo "<br>";
    
    $variavel = 10;
    echo "<br>" . $variavel;
    
    $variavel = "Agora sou uma string!";
    echo "<br>" . $variavel;
    echo "<br>";
    $var = 'Valida!';
    $var2 = 'Valida!';
    $VAR3 = 'Valida!';
    $_VAR_4 = 'Valida!';
    $vâr = 'Valida!'; // evitar
    // $6var = 'Invalida!' 
    // $%var7 = 'Invalida!' 
    // $var8% = 'Invalida!' 
    echo "<br>";
    echo $_SERVER;
    echo "<br>";
    var_dump($_SERVER["HTTP_HOST"]);
    echo "<br>";


?>