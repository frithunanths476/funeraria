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

        if (!is_numeric($idade)) {
            throw new Exception("Idade deve ser um número");
        }

        $this->idade = $idade;

        if (!is_numeric($altura)) {
            throw new Exception("Altura deve ser um número");
        }

        $this->altura = $altura;

        if (!is_numeric($CPF)) {
            throw new Exception("CPF deve ser um número");
        }

        $this->CPF = $CPF;
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