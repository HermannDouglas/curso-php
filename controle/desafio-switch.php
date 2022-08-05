<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="km-metro">km > Metro</option>
        <option value="metro-km">Metro > Km</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php 
    const FATOR_KM_MILHA = 0.62132;
    const FATOR_KM_METRO = 1000;
    
    if(isset($_POST['param']) && isset($_POST['conversao'])){
        // echo $_POST['param'] . "<br>";
        // echo $_POST['conversao'] . "<br>";
        
        $valor = $_POST['param'];
        $conversao = $_POST['conversao'];
        $resultado = 0.0;
        
        switch($conversao){
            case "km-milha":
                $resultado = $valor / FATOR_KM_MILHA;
                $mensagem = "$valor Km(s) = $resultado Milha(s).";
                break;
            case "milha-km":
                $resultado = $valor * FATOR_KM_MILHA;
                $mensagem = "$valor Milha(s) = $resultado Km(s).";
                break;
            case "km-metro":
                $resultado = $valor * FATOR_KM_METRO;
                $mensagem = "$valor Km(s) = $resultado metro(s).";
                break;
            case "metro-km":
                $resultado = $valor / FATOR_KM_METRO;
                $mensagem = "$valor metro(s) = $resultado Km(s).";
                break;
            case "celsius-fahrenheit":
                $resultado = $valor * 1.8 + 32; // F = C x 1,8 + 32
                $mensagem = "{$valor}° Celsius = {$resultado}° Fahrenheit";
                break;
            case "fahrenheit-celsius":
                $resultado = ($valor - 32) / 1.8; // C = (F − 32) ÷ 1, 8
                $mensagem = "{$valor}° Grau Fahrenheit = {$resultado}° Celsius";
                break;
            default:
                $mensagem = "Nenhum valor calculado!";
        } 
       
        echo "<p>$mensagem<br></p>";

        // $resultadoFormatado = number_format($resultado, 4, ',', '.');
        // echo "<p>Resultado: $resultadoFormatado</p>";
    }
?>