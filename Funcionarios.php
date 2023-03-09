<?php

class Funcionarios extends Pessoas {

    public function __construct($nome, $cargo, $cpf, $salario, $telefone, $email) {
        parent::__construct($nome, $cargo, $cpf, $salario, $salario, $telefone, $email);
    }

    public function listarDados(){}
}
?>