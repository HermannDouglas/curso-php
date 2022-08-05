<div class="titulo">Multidimencionais</div>

<?php
    $dados = [
        [
            "nome" => "Roberto",
            "idade" => 26,
            "naturalidade" => "São Paulo"
        ],
        [
            "nome" => "Maria",
            "idade" => 25,
            "naturalidade" => "Bahia"
        ],
    ];

    print_r($dados);
    // echo '<br>' . $dados['pessoa1']['idade'];
    echo '<br>' . $dados[0]['idade'];
    echo '<br>' . $dados[1]['idade'];
    
    $dados[] = [
        "nome" => "Florinda",
        "idade" => 30,
        "naturalidade" => "Cidade do México"
    ];
    
    echo '<br>';
    print_r($dados);
    echo '<br>' . $dados[2]['idade'];
    
    $dados[2]["vizinhos"] = "Chaves";
    echo '<br>';
    print_r($dados[2]);
    echo '<br>';
    
    unset($dados[1]);
    print_r($dados);
    var_dump($dados[1]); // Array indefinido
    

?>