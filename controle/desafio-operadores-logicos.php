<div class="titulo">Desafio Operadores Lógicos</div>

     <!-- Dois trabalhos -> terça e quinta!
    - Se os dois trabalhos forem executados -> TV 50' e Sorvete
    - Se apenas ums for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável -->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php 
    // var_dump(!!$_POST['t1']);
    // var_dump(!!$_POST['t2']);
    echo "<br>";

    if(isset($_POST['t1']) && isset($_POST['t2'])){
        $t1 = !!$_POST['t1'];
        $t2 = !!$_POST['t2'];
        $tv = '';
        $sorvete = false;

        if($t1 && $t2){
            $tv = '50"';
        }elseif($t1 xor $t2){
            $tv = '32"';
        }

        if($t1 || $t2){
            $sorvete = true;
        }

        if($tv){
            $resultado = "Vamos comprar uma TV de $tv.";
        }else{
            $resultado = "Sem TV dessa vez :(";
        }

        $saudavel = !$sorvete;

        if($saudavel){
            $resultado .= "<br>E estamos mais saudáveis!";
        } else {
            $resultado .= "<br>Sorvete liberado! \o/";
        }

        echo "<p>$resultado</p>";
        }
    
?>
