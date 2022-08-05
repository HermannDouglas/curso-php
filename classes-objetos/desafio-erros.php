<div class="titulo">Desafio Erros</div>

<?php
interface Template{
    public function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    abstract public function metodo3();
}

class Classe extends ClasseAbstrata {
    function __construct($parametro){
        $this->parametro = $parametro;
        echo "Construtor iniciado com {$this->parametro}!<br>";
    }

    public function metodo1(){
        echo "Método 1 funcionando.<br>";
    }

    public function metodo2($parametro){
        echo "Método 2 com {$parametro} está funcionando.<br>";
    }

    public function metodo3(){
        // parent::metodo3();
        echo "Estou funcionando<br>";
    }
}

$exemplo = new Classe('Parametro no construtor');
$exemplo->metodo1();
$exemplo->metodo2('PARAMETRO');
$exemplo->metodo3();

?>