<?php

class Veiculos extends objeto implements InterfaceFuneraria {
    public function __construct($placa, $marca, $ipva, $ano) {
        parent::__construct($placa, $marca, $ipva, $ano);
    }

    public function listarDados() {
        echo "A placa do veículo é : " . $this->getPlaca() . " <br>";
        echo "A marca do veículo é :" . $this->getMarca() . " <br>";
        echo "O IPVA do veículo é : " . $this->getIpva() . " <br>";
        echo "A ano do veículo é :" . $this->getMarca() . " <br>";
    }
}

?>


