
<?php
include("InterfaceFuneraria.php");
include("objeto.php");
include("Pessoas.php");
include("Funcionarios.php");
include("Clientes.php");
include("Produtos.php");
include("Servics.php");
include("veiculos.php");

$veiculo = new Veiculos (
    "FRR0126",
    "CHEVROLET",
    "R$54,90",
    "2018"
);

$veiculo->listarDados();

$cliente = new Clientes(
    "José Igor Aparecido dos Santos",
    92,
    165,
    44623498709,
    "Ataque cardíaco"
);

$cliente->listarDados();

$funcionario = new Funcionarios(
    "Wagner",
    "Agente Funerário",
    33344488866,
    2037,
    99816782,
    "Wagner.lobo@gmail.com"
);

$funcionario->listarDados();

?>
<?php
$servicos = new Servics (
    "Cremação",
    10000,
    "Seu ente querido será queimado com todo carinho, sem sentir dor "

);

$servicos->listarDados();
?>
