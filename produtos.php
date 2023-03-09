<?php 
    
    class produtos extends objetos implements interface{
        public function __construct($nome, $GT, $valor, $altura, $largura) {
            parent::__construct($nome, $GT, $valor, $altura, $largura);
        }

        public function listarDados() {
            echo "o nome do produto é : " . $this->getNome() . "<br>";
            echo "a quantidade do produto é : " . $this->getGT() . "<br>";
            echo "o valor do produto é : " . $this->getValor() . "<br>";
            echo "a altura do produto é : " . $this->getAltura() . "<br>";
            echo "a largura do produto é : " . $this->getLargura() . "<br>";
        }
    }

?>