<div class="titulo">Construtor & Destrutor</div>

<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($novoNome, $idade = 18){
            echo 'Construtor invocado!<br>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct(){
            echo 'Contrutor destruído!<br>';
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade} anos.<br>";
        }
    }

    $pessoaA = new Pessoa('Rebecca Maria', 40);
    $pessoaB = new Pessoa('Joao Pedro');
    
    $pessoaA->apresentar();
    unset($pessoaA);
    
    $pessoaB->apresentar();
    $pessoaB = null;

?>