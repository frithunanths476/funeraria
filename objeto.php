<?php
    
class veiculos {
    private $placa;
    private $marca;
    private $ipva;
    private $ano;

    public function __construct($placa, $marca, $ipva, $ano){
        $this->placa = $placa;
        $this->marca = $marca;
        $this->ipva = $ipva;
        $this->ano = $ano;

    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getIpva() {
        return $this->ipva;
    }

    public function getAno() {
        return $this->ano;
    }
}    

class servicos {
    private $nome;
    private $valor;
    private $descricao;

    public function __construct($nome, $valor, $descricao){
        $this->nome = $nome;
        $this->valor = $valor;
        $this->descricao = $descricao;

    }

    public function getnome() {
        return $this->nome;
    }

    public function getvalor() {
        return $this->valor;
    }

    public function getdescricao() {
        return $this->descricao;
    }
}    

?>


