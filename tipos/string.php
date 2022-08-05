<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma String.<br>';
    echo "Eu sou uma String.<br>";
    var_dump("Eu Também");
    echo "<br>";
    
    // Concatenação
    echo "Nós também" . ' somos!<br>';
    echo "Número é " . 123;
    echo '<br>', "Também aceito", " virgulas.";
    echo "<br>";
    echo "'Teste'" . ' "teste."' . ' \'Teste\'' . " \"teste.\"" . " \\";
    print("<br>Também existe a função 'print'.");
    print "<br>Também existe a função 'print'.";
    echo("<br>Eu sou uma String.<br>");

    // Algumas funções
    echo "<br>" . strtoupper("maximizado.");
    echo "<br>" . strtolower("MINIMIZADO.");
    echo "<br>" . ucfirst("só a primeria letra é maiuscula.");
    echo "<br>" . ucwords("todas as palavras.");
    echo "<br>" . strlen("Quantas letras?");
    echo "<br>" . mb_strlen("Eu Também", "utf-8");
    echo "<br>" . substr("Só uma parte mesmo.", 7, 6); // parte
    echo "<br>" . str_replace("isso", "aquilo", "Trocar isso.");
?>