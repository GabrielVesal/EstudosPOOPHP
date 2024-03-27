<?php 
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    function apresentar() {
        print "<p>----------------</p>";
        print "CHEGOU A HORA! O lutador ". $this->getnome();
        print " Veio diretamente de " . $this->getNacionalidade();
        print ", tem " . $this->getIdade() . " anos a pesa " . $this->getPeso() . "KG";
        print "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
        print $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
    }
    function status() {
        print "<p>----------------</p>";
        print "<p>". $this->getNome() . " é um peso " . $this->getCategoria();
        print " e já ganhou " . $this->getVitorias() . " vezes e ";
        print " perdeu " . $this->getDerrotas() . " vezes, ";
        print " empatou " . $this->getEmpates() . " vezes!";
    }
    function ganharLuta() {
        $this->setVitorias($this->getVitorias()+1);
    }
    function perderLuta() {
        $this->setDerrotas($this->getDerrotas()+1); 
    }
    function empatarLuta() {
        $this->setEmpates($this->getEmpates()+1); 
    }

    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
        
    }

    public function getCategoria() {
        return $this->categoria;
    }

    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }
}
    

?>