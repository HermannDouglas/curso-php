<div class="titulo">Desafio Sorteio</div>

<?php
    $nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela", "Mulan", "Chapéuzinho Vermelho"];

    $sorteado = array_rand($nomes);
    echo "<div center><h1>$nomes[$sorteado]</h1></div>";
?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>