<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata{
    abstract public function metodo1();

    public final function metodo2(){
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends Abstrata{
    public function metodo1(){
        echo "Executando método 1.<br>";
    }

    // public function metodo2(){
    //     echo "Extendendo método 2.<br>";
    // }
}

$objeto = new Classe('...');
$objeto->metodo1();
$objeto->metodo2();

 final class Unica{
    public $atributo = 'Valor Único';
}

$unico = new Unica();
echo "{$unico->atributo}<br>";

// class Duplicata extends Unica{
//     public $atributo2 = 'Valor Duplicata';
// }

// $objeto2 = new Duplicata();
// echo "{$objeto2->atributo}<br>";
// echo "{$objeto2->atributo2}<br>";

?>