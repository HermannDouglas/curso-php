<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo 'Construtor iniciado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'Construtor encerrado!';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params){
        echo "Tentando executar método '{$metodo}'";
        echo ", com os prametros: ";
        print_r($params);
        echo '<br>';
    }
}

$pessoa = new Pessoa('Ricardo', 40); // __construct
$pessoa->apresentar(); // Chamando o __toString
echo $pessoa, '<br>'; // Chamando o __toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar(); // chama o metodo diretamente sem __call
 
$pessoa->nomeCompleto = 'Muito legal!!!'; // __set
$pessoa->nomeCompleto; // __get
echo $pessoa->nome; // acessa o atributo diretamente sem __get

$pessoa->exec(1, 'Teste', true, [1, 2, 3]); // chama __call pq o metodo não existe no objeto
$pessoa = null; // __destruct
?>