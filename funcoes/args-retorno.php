<div class="titulo">Argumentos & Retorno</div>

<?php
    function obterMensagem(){
        return 'Seja bem Vindo(a)!';
    }

    $texto = obterMensagem();
    echo "$texto<br>";
    echo obterMensagem() . "<br>";
    var_dump(obterMensagem());
    echo "<hr>";

    function obterMensagemComNome($nome){
        return "Bem vindo, {$nome}!";
    }

    $mensagem = obterMensagemComNome("Hermann");
    echo "$mensagem<br>";
    echo obterMensagemComNome('Douglas') . "<br>";
    echo "<hr>";

    function soma($a, $b){
        return $a + $b;
    }
    $x = 5;
    $y = 4;
    
    echo soma(45, 78). "<br>";
    echo soma($x, $y). "<br>";

    function trocaValor($a, $novoValor){
        $a = $novoValor;
    }

    $variavel = 1;
    trocaValor($variavel, 3);
    echo $variavel . "<br>";
    
    function trocaValorDeVerdade(&$a, $novoValor){
        $a = $novoValor;
    }

    trocaValorDeVerdade($variavel, 5000);
    echo $variavel . "<br>";

?>