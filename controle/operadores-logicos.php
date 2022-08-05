<div class="titulo">Operadores Lógicos</div>

<?php 
    echo "<p class='divisao'>Negação Lógica</p><hr>";
    var_dump(true);
    echo '<br>';
    var_dump(!true);
    echo '<br>';
    
    echo "<p class='divisao'>Tabela verdade 'AND'</p><hr>";
    var_dump(true && true);
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false && false);
    echo '<br>';

    var_dump(true and true);
    var_dump(true and false);
    var_dump(false and true);
    var_dump(false and false);
    
    echo "<p class='divisao'>Tabela verdade 'OR'</p><hr>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);
    echo '<br>';
    
    var_dump(true or true);
    var_dump(true or false);
    var_dump(false or true);
    var_dump(false or false);
    
    echo "<p class='divisao'>Tabela verdade 'XOR'</p><hr>";
    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(false xor false);
    echo '<br>';

    var_dump(true != true);
    var_dump(true != false);
    var_dump(false != true);
    var_dump(false != false);
    
    echo "<p class='divisao'>Exemplos<hr></p>";
    $idade = 62;
    $sexo = 'F';
    $pagou_a_pevidencia = true;
    $criterio_homem = ($idade >= 65 && $sexo === 'M');
    $criterio_mulher = ($idade >= 60 && $sexo === 'F');
    $atingiu_criterio =  $criterio_homem || $criterio_mulher;
    $pode_se_aposentar = $pagou_a_pevidencia && $atingiu_criterio;
    echo "Pode se aposentar -> $pode_se_aposentar<br>";

    if($idade >= 60 && $sexo === 'F'){
        echo "Pode se aposentar -> $sexo.<br>";
    }elseif($idade >= 65 && $sexo === 'M'){
        echo "Pode se aposentar -> $sexo.<br>";
    }else{
        echo "Vair ter que trabalhar mais um pouco...";
    }
    
?>

