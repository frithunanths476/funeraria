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


class produtos {
    private $nome;
    private $GT;
    private $valor;
    private $altura;
    private $largura;

    public function __construct($nome, $GT, $valor, $altura, $largura){
        $this->nome = $nome;
        $this->GT = $GT;
        $this->valor = $valor;
        $this->altura = $altura;
        $this->largura = $largura;

    }

    public function getNome() {
        return $this->nome;
    }

    public function getGT() {
        return $this->GT;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getLargura() {
        return $this->largura;
    }

}

?>
<?php

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



