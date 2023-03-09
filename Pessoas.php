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

class Funce {
    private $nome;
    private $cargo;
    private $cpf;
    private $salario;
    private $telefone;
    private $email;

    public function __construct($nome, $cargo, $cpf, $salario, $telefone, $email) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->cpf = $cpf;
        $this->salario = $salario;
        $this->telefone = $telefone;
        $this->email = $email;


    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }
}

?>