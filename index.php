
<?php

include("Pessoas.php");
include("Funcionarios.php");
include("Clientes.php");
include("Interface.php");
include("Objetos.php");
include("Produtos.php");
include("servicos.php");
include("veiculos.php");

$cliente = new Clientes(
    "José Igor Aparecido dos Santos",
    92,
    1.65,
    446.234.987-09,
    "Ataque cardíaco"
);

$funcionario = new Funcionarios(
    "Wagner",
    "Agente Funerário",
    33344488866,
    2037,
    99816782,
    "Wagner.lobo@gmail.com"
 )
?>

