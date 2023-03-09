
<?php

    include("Pessoas.php");
    include("Funcionarios.php");
    include("Clientes.php");
    include("Interface.php");
    include("Produtos.php");
    include("servicos.php");
    include("veiculos.php");
    
    $veiculo = new Veiculos (
        "FRR0126";
        "CHEVROLET",
        "R$54,90",
        "2018",
    
    );
    
    $veiculo->listarDados();
    
    $cliente = new Clientes(
        "José Igor Aparecido dos Santos",
        92,
        165,
        44623498709,
        "Ataque cardíaco"
        );
    
    $funcionario = new Funcionarios(
        "Wagner",
        "Agente Funerário",
        33344488866,
        2037,
        99816782,
        "Wagner.lobo@gmail.com"
        );
    
    $servicos = new servicos (
        "Cremação",
        "10.000",
        "Seu ente querido será queimado com todo carinho, sem sentir dor <3",
        );
    
    
        $produtos = new produtos (
            "flores",
            "1 coroa de flores",
            "R$570,68",
            "150cm",
            "100cm",
        
        );
        
        $produtos->listarDados();
?>

