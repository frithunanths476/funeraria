<?php

class Clientes extends Pessoas implements Interface {

    public function __construct($nome, $idade, $altura, $CPF, $obito) {
        parent::__construct($nome, $idade, $altura, $CPF, $obito);
    }

    public function listarDados() {
        echo "O Nome é : " . $this->getNome() . " <br>";
        echo "A idade é :" . $this->getIdade() . " <br>";
        echo "A altura é :" . $this->getAltura() . " <br>";
        echo "O CPF é :" . $this->getCPF() . " <br>";
        echo "O motivo do óbito foi :" . $this->getObito() . " <br>";
    }
}

?>