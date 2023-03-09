<?php

class Pessoas {
    private $nome;
    private $idade;
    private $altura;
    private $CPF;
    private $obito;

    public function __construct($nome, $idade, $altura, $CPF, $obito) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->CPF = $CPF;
        $this->obito = $obito;


    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getCPF() {
        return $this->CPF;
    }

    public function getObito() {
        return $this->obito;
    }
}

?>