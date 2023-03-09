<?php

class Funcionarios extends Funce {

    public function __construct($nome, $cargo, $cpf, $salario, $telefone, $email) {
        parent::__construct($nome, $cargo, $cpf, $salario, $salario, $telefone, $email);
    }

    public function listarDados(){
        echo "O nome é :" . $this->getNome() . " <br>";
        echo "O cargo é : " . $this->getCargo() . " <br>";
        echo "O CPF é :" . $this->getCpf() . " <br>";
        echo "O salário é :" . $this->getSalario() . " <br>";
        echo "O Telefone é : " . $this->getTelefone() . " <br>";
        echo "O E-mail é :" . $this->getEmail() . " <br>";
    }
}
?>