<div class="titulo">Visibilidade</div>

<?php
    class A{
        public $publico = 'Público';
        protected $protegido = 'Protegido';
        private $privado = 'Privado';

        public function mostrarA(){
            echo "Class A) Publico = {$this->publico}<br>";
            echo "Class A) Protegido = {$this->protegido}<br>";
            echo "Class A) Privado = {$this->privado}<br>";
        }

        protected function vaiPorHeranca(){
            echo 'Serei transmitido por Herança!<br>';
        }

        private function naoMostrar(){
            echo 'Não vou imprimir!<br>';
        }
    }

    $a = new A();
    $a->mostrarA();
    echo '<br>';
    
    echo "{$a->publico}<br>";
    // echo "{$a->protegido}<br>";
    // echo "{$a->privado}<br>";
    
    // $a->naoMostrar();
    
    class B extends A{
        public function mostrarB(){
            echo "Class A) Publico = {$this->publico}<br>";
            echo "Class A) Protegido = {$this->protegido}<br>";
            echo "Class A) Privado = {$this->privado}<br>";

            parent::vaiPorHeranca();
        }
    }

    $b = new B();
    $b->mostrarA();
    echo '<br>';
    $b->mostrarB();
    echo '<br>';
    // $b->vaiPorHeranca();
?>