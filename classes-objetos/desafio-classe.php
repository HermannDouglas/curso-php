<div class="titulo">Desafio Classe</div>

<?php
    class Data{
        public $dia = 1;
        public $mes = 1;
        public $ano = 1970;

        public function apresentaData(){
            return "Data: {$this->dia}/{$this->mes}/{$this->ano}<br>";
        }
    }

    $data1 = new Data();
    echo $data1->apresentaData();
    
    $data2 = new Data();
    $data2->dia = 28;
    $data2->mes = 02;
    $data2->ano = 1993;
    echo $data2->apresentaData();
?>