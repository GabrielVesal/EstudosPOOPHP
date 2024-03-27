<?php 
abstract class Animal{
    protected $idade;
    protected $membro;
    protected $peso;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getMembro(){
        return $this->membro;
    }

    public function setMembro($membro){
        $this->membro = $membro;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }
}
?>