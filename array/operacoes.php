<div class="titulo">Operações</div>

<?php
    $dados_1 = [
        "nome" => "José",
        "idade" => 28
    ];

    $dados_2 = [
        "nacionalidade" => "Fortaleza"
    ];

    $dados_2["Endereço"] = "Rua A";

    $dados_completos = $dados_1 + $dados_2;
    print_r($dados_completos);

    echo '<br>' . is_array($dados_completos);
    echo '<br>' . count($dados_completos);
    
    echo '<br>';
    $indice = array_rand($dados_completos);
    echo "$indice = $dados_completos[$indice]";
    echo '<br>';
    echo "{$dados_completos['idade']}";
    echo " ${dados_completos['idade']}";
    
    echo '<br>';
    unset($dados_completos["nome"]);
    print_r($dados_completos);
    
    unset($dados_completos);
    echo '<br>';
    var_dump($dados_completos);

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    $decimais = $pares + $impares;
    echo '<br>';
    print_r($decimais);
    
    $decimais = array_merge($pares, $impares);
    echo '<br>';
    print_r($decimais);
    
    sort($decimais);
    echo '<br>';
    print_r($decimais);
    


?>