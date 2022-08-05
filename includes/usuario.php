<?php
require_once('pessoa.php');

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    function __destruct(){
        parent::__destruct();
    }

    public function apresentar(){
        $login = "@{$this->login}: ";
        return $login . parent::apresentar();
    }
}
?>