<?php 
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;

    public function alimentar(){
        print "<p>Comendo frutas</p>";
    }

    public function emitirSom (){
        print "<p>Som de ave</p>";
    }

    public function locomover (){
        print "<p>Voando</p>";
    }

    public function fazerNinho (){
        print "<p>Construindo um Ninho</p>";
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}
?>