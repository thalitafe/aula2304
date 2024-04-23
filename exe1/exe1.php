<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <div>
        <?php
        $nome = $_POST["nome"];
        $salário = $_POST["salário"];
        $anos_profi = $_POST["anos_profi"];    
        
        if ($anos_profi <= 3) {
            $novo_sal = $salário +($salário * 3 / 100);
        }
        elseif ($anos_profi <= 10) {
            $novo_sal = $salário + ($salário * 12.5 / 100);
        }
        else {
            $novo_sal = $salário + ($salário * 20 / 100);
        }
        echo "Você tem $anos_profi anos de profissão e seu novo salário será: ".number_format($novo_sal,2);

        
        ?>
    </div>
    <a href="exe1.html"><button type="submit">Voltar</button></a>
    
</body>
</html>