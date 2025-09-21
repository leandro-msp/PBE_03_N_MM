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
    <hr>
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
    <hr>
    <h2> Operador de String </h2>
    
    <?php
    $a = "Maria "; //$a = Maria 
    echo "$a <br>"; //$b = Maria
    $b = "Leopoldina "; //Leopoldina
    echo "$b <br>"; // Leopoldina
    echo $a . $b; // Maria Leopoldina
    $b .= $a; // $b = Leopoldina Maria // a variável $b assume, agora, também o conteúdo da variável $a
    $b .= "Pedro"; // aqui, agora, a variável $b assume também o conteúdo da string 
    echo "<br>$b"; //  Leopoldina Maria Pedro
    ?>
    <hr>
    <h2> Incremento/Decremento </h2>

    <?php
    echo "<h3> Pré Incremento </h3><br>";
    // pré-incremento
    $x = 100; // x = 100
    echo "x = ".++$x; // $x=101
    echo "<br>x final = ".$x; // $x final = 101
     
    echo "<h3> Pós-Incremento </h3><br>";
    // pós-incremento
   
    $y = 100; // $y = 100
    echo "y = ".$y++; // $y=100 // primeiro o comando de impressão executa o valor da variável, depois adiciona o incremento (+1)
    echo "<br>y final = ".$y; // $y final = 101
  
    
    $i=10; // $i =10 
    
    echo "<br> i = $i<br>"; // 10
    
    $i++; //11 -- pós-incr só vai funcionar acompanhado do comando de impressão/exibição (echo)
    $i++;//12 -- neste caso, por ja saber que o novo valor de "$i" é 11, será adicionado +1, sendo assim novo valor é 12
    ++$i;//13  " "
    ++$i;//14 " "
    
    // $i+=4;

    echo "<br>i= $i"; // 14

    echo "<h3>Decremento</h3><br>";

    echo "I com pós decremento= ".$i--; //13
    echo "<br> i = $i";
    $i--;//12 
    --$i;//11
    
    echo "<br> i = $i"; // 11
    ?>
    <hr>
    <h2>Operadores de Comparação</h2>
    <?php

    echo "<h4>Igual, Idêntico, Não Igual, Não Idêntico,Diferente</h4>";


    $e=15;
    $f=15;

    echo "e = $e<br>";
    echo "f = $f<br>";
    echo "<br>";
    echo "(==) Igualdade = " .($e==$f)."<br>"; //TRUE //  verifica se os valores são iguais

    echo "(===) Idêntico = " .($e===$f)."<br>"; //TRUE// verifica  além do conteúdo da variável, analisa tbm o tipo(string,number, etc)

    echo "(!=) Não igual = ".($e!=$f)."<br>"; //FALSE // verifica se os valores das variáveis são "Não iguais", neste caso os valores são iguais

    echo "(!==) Não Idêntico = ".($e!==$f)."<br>"; //FALSE // verifica se o conteúdo e o tipo são "Não identicos", neste caso o conteúdo e o tipo são os mesmos,
    // por ventura se fossem valores iguais, porém tipos diferentes, ou vise-versa resultaria em true, pois seriam nn identicos.

    echo "(<>) Diferente = ".($e<>$f)."<br>";

    echo "<hr>";

    echo "<h3>Maior, Menor, Maior ou igual, Menor ou igual</h3>";

    $e=10;
    $f=10;
    $g=11;

    echo "<br> e = $e<br> f = $f <br> g = $g<br><br>";

    echo '$e é Menor que $f :'.($e<$f)."<br>"; // $e é menor que $f? Não, ambos são mesmo valor. FALSE
    echo '$e é Menor ou igual a $f: '.($e<=$f)."<br>"; // $e é menor ou igual a $f? Sim, eles são iguais. TRUE
    echo '$g é Maior que $f: '.($g>$f)."<br>"; //$g é maior que $f, sim ele é maior. TRUE
    echo '$g Maior ou igual a $f: '.($g>=$f)."<br>"; // $g é maior ou igual a $f? Sim, ele é maior, TRUE

    ?>

</body>
</html>