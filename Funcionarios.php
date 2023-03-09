<?php

class Funcionarios extends Pessoa {

    public function __construct($nome, $cargo, $cpf, $salario, $telefone, $email) {
        parent::__construct($nome, $cargo, $cpf, $salario, $salario, $telefone, $email);
    }
}
?>