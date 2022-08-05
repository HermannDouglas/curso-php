<div class="titulo">Interface</div>

<?php
interface Animal{
    function respirar();
}

interface Canino extends Animal, Mamifero{
    function latir(): string;
}

interface Felino{
    function correr();
}

interface Mamifero{
    function mamar();
}

class Cachorro implements Canino {
    function respirar(){
        return 'Irei usar oxigênio!';
    }

    function latir(): string{
        return 'Au au';
    }

    function mamar(){
        return 'Irei usar o leite!';
    }

    function correr(){
        return 'Vrummmmmm';
    }

}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';

var_dump($animal);
echo '<br>';
var_dump($animal instanceof Animal);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Felino);

?>