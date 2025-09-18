<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Aula07_91 - 18/09/25</h1>
    <h2>Aritiméticos </h2>
    <?php
    $a=10;
    $b=5;
    echo "Adição:".($a + $b); // 15
    echo "<br>Subtração:".($a - $b); // 5
    echo "<br>Multiplicação:".($a * $b); // 50
    echo "<br>Divisão:".($a / $b); //2
    echo "<br>Módulo:".($a % $b); // 0
    echo "<br>Exponenciação:".($a ** $b); // 100k
    ?> 
    <h2>Atribuição</h2>

    <?php
    $a=10;
    $b=2;
    $a+=$b; //$a=$a+$b//$a=10+2//$a=12
    $b-=5; // $b=2-5// $b=-3
    echo "a = ".$a; // $a = 12
    echo "<br>b = ".$b;
    $c=11; // $c=11
    $d=6; // $d=6
    $c%=$d; //$c=11%6//$c = 5
    $d+=$a; //$d=6+12//%d = 18
    echo "<br>c = ".$c; // $c = 5
    echo "<br>d = ".$d; // $d = 18
    ?>
    <h2> Operador de String </h2>

    <?php
    $a = "Maria "; //$a = Maria 
    echo "$a <br>"; // Maria
    $b = "Leopoldina "; // $b = Leopoldina
    echo "$b <br>"; // Leopoldina
    echo $a . $b; // Maria Leopoldina
    $b .= $a; // $b = Leopoldina Maria
    $b .= "Pedro";
    echo "<br>$b"; //  Leopoldina Maria Pedro
    ?>
    <h2> Incremento/Decremento </h2>

    <?php

    // pré-incremento
    $x = 100; // x = 100
    echo "x = ".++$x; // $x=101
    echo "<br>x final = ".$x; // $x final = 101

    // pós-incrementop

    // $x = 100; // x = 100
    // echo "x = ".$x++; // $x=100
    // echo "<br>x final = ".$x; // $x final = 101
 echo "<hr>";
    
    $i=10; // $i =10 
    echo "<br> i = $i"; // 10
    $i++; //11
    $i++;//12
    ++$i;//13
    ++$i;//14

    //$i+=4;
    echo "<br i= $i"; // 14

    $i--; //13
    $i--;//12 
    --$i;//11
    echo "<br> i = $i;" // 11

   
    ?>
</body>
</html>