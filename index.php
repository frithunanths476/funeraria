<?php

include("Pessoas.php");
include("Funcionarios.php");
include("Clientes.php");
include("Interface.php");
include("Objetos.php");
include("Produtos.php");
include("servicos.php");
include("veiculos.php");

try {

    $funcionario = new Funcionarios(
        "Wagner",
        "Agente Funerário",
        33344488866,
        2037,
        99816782,
        "Wagner.lobo@gmail.com"
    )
}
?>