<div class="titulo">Include Função</div>

<?php
echo ' Carregando: include-funcao<br>';

function carregarArquivo(){
    include('include-arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5), '!<br>';

}

echo 'Novamente no arquivo include-funcao.<br>';
// echo soma(1, 8) . '!<br>';
carregarArquivo();

echo "Variável = '{$variavel}'.<br>";
var_dump($variavel);
echo '<br>' . soma(3, 8);

?>