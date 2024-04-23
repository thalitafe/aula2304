<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <div>
        <?php
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
        $imc = $peso / ($altura * $altura);
        if ($imc <=18.5) {
            $status = "Abaixo do Peso";
        }
            elseif ($imc >= 18.5 and $imc <25) {
                $status = "Peso ideal";
        }
                elseif ($imc >= 25 and $imc <= 30) {
                    $status = "Sobrepeso";
        }
                    elseif ($imc >= 30 and $imc<=40) {
                        $status = "Obesidade";
        }
                        else {
                            $status = "Obesidade mórbida";
        }
        
        echo "Seu IMC é :".number_format($imc,2); 
        echo "<br/>";
        echo "Seu Status é : $status";       
        ?>
    </div>
    <a href="exe3.html"><button type="submit">Voltar</button></a>
    
</body>
</html>