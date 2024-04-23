<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <div>
        <?php
        $horas = $_POST["horas"];
        $mes = 31;
        $a_fisica = $mes / $horas;
        if ($horas <= 10) {
            $status = "2 pontos";
        }
        elseif ($horas >= 10 and $horas <=20) {
            $status = "5 Pontos";
        }
        else {
            $status = "10 Pontos";
        }
        
        echo "Voçê correu $horas horas ao mês."."<br/>";
        echo "Voçê guanhou  $status.";
        
        
            
        

         ?>
    </div>
    <a href="exe4.html"><button type="submit">Voltar</button></a>
    
</body>
</html>