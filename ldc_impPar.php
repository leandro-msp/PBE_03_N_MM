<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ímpar Ou Par</title>
</head>
    <?php
        echo "<h2>ÍMPAR OU PAR COM BASE NA DIVISÃO</h2>";
        echo "<hr>";
        echo "<h3>Insira o valor na campo abaixo:</h3>";
    ?>
    <form method="post" action="ldc_impPar.php">
        Valor <input type="number" name="valor"> 
        <input type="submit" value="Calcular"><br>
    </form>

    <?php 
        $divisor=2;
        $valor=$_POST["valor"];
        $resultado= ($valor/$divisor);
        $resto= ($valor % $divisor);

        $impPar=($resto==1) ? "Número Impar" : "Número Par";

        echo "<br>Valor Inserido: $valor<br>";
        echo "Resultado da Divisão é: $resultado<br>";
        echo "O Resto da divisão é: $resto<br>";
        echo "<h2>O valor inserido é um : $impPar</h2>"

    ?>
<body>
    
</body>
</html>