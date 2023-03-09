<?php

    class Servics extends Servicos implements InterfaceFuneraria {

        private $servicos;

        public function __construct($nome, $valor, $descricao) {
            parent::__construct($nome, $valor, $descricao);
        }


        public function listarDados() {
            echo "O nome é : " . $this->getnome() . " <br>";
            echo "A valor da cremação é :" . $this->getvalor() . " <br>";
            
            echo "A descrição é :" . $this->getdescricao() . " <br>";
        }
    }
    
    
?>