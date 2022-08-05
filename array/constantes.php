<div class="titulo">Arrays Constantes</div>

<?php
    const FRUTAS = array('Larana', 'Abacaxi');
    // FRUTAS[0] = 'banana';
    // FRUTAS[] = 'banana';
    echo FRUTAS[0];
    
    const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
    // CARROS["BMW"] = '325i';
    echo '<br>' . CARROS["Fiat"];
    
    define('CIDADES', array('Belo Horizonte', 'Recife'));
    // CIDADES[1] = 'Rio Branco';
    echo '<br>' . CIDADES[1];

?>