<?php 
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;

    public function alimentar() {
        print "<p>Comendo vegetais</p>";
    }

    public function emitirSom() { 
        print "<p>Som de Réptil</p>"; 
    }
    
    public function locomover() {
        print "<p>Rastejando</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
?>