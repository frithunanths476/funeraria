<?php

class Funcionarios extends ff implements Interface {

    public function __construct($nome, $cargo, $cpf, $salario, $telefone, $email) {
        parent::__construct($nome, $cargo, $cpf, $salario, $salario, $telefone, $email);
    }

    public function fala() {
        echo "Bem Vindos a nossa funerária, tenha um bom funeral <br>";
    }
}
?>