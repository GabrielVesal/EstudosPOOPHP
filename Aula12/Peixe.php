<?php 
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;

    public function locomover(){
        print "<p>Nadando</p>";
    }
    public function alimentar() {
        print "<p>Comendo substâncias</p>";
    }
    public function emitirSom() { 
        print "<p>Peixe não faz som</p>"; 
    }

    public function soltarBolha() { 
        print "<p>Soltou uma bolha</p>"; 
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
?>