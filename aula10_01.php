<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula101_01</title>
</head>
<body>
    <h1> Aula10_01 - 23/10/25</h1>
    <h2> Estrutura de Looping </h2>
    <?php
    echo "<h2>While </h2>";
    $i=0;
    while($i<5){
        echo "$i";
        $i++;;
    }
    echo "<hr>";
    /*
    1 - qual a saída? // 01234
    2 - qual o valor incial? // 0 
    3 - qual a condição // $i<5 - enquanto I for menor que 5 imprmir I na tela e executar o comando de incrementar mais 1 ao valor de I.
    4 - qual o contador  // $i++ // incremento
    5 - quantas vezes o looping foi executado? // 5 vezes
    6 - qual o valor que tornou a condição falsa // valor 5 , pois foi neste ponto que o comando encontrou a condição falsa. I deixou de ser menor (<) que 5 e se tornou igual(=).
    */

    echo "<h2>While </h2>";
    $i=13;
    while($i<17){
        echo " $i ";
        $i++;
    }
    echo "<hr>";

    /*
    1) 13 14 15 16
    2) 13
    3) $i<17
    4) $i++
    5) 4
    6) 17
    */

     echo "<h2>While </h2>";
    $i=5;
    while($i>0){
        echo " $i ";
        $i--;
    }
    echo "<hr>";

    /*
    1) 5 4 3 2 1
    2) 5
    3) $i>0 ou $i>=1
    4) $i--
    5) 5
    6) 0
    */


     echo "<h2>While </h2>";
    $i=0;
    while($i<12){
        echo " $i ";
        //$i++; $i++; // gambiarra 
        $i+=2; // correto
    }
    echo "<hr>";

    /*
    1) 0 2 4 6 8 10 
    2) 0
    3) $<12 ou $i<=10
    4) $i+=2
    5) 6
    6) 12
    */

    echo "<h2> Do While</h2>";

    $i=0;
    do{ 
        echo " $i ";
        $i++;
    }while ($i<5);

    echo "<hr>";

    echo "<h2> FOR</h2>";

    for($i=5;$i<25;$i+=5)
        echo " $i ";

    echo "<hr>";

    echo "<h2> Instrução For (aninhada)</h2>";


for ($i=0; $i<2; $i++) { // externo
  for ($j=0; $j<3; $j++) { // interno
    echo "$i $j<br>";
  }
}
/*
i j
0 0
0 1
0 2
1 0
1 1
1 2
*/

echo "<hr>";

for ($i=1; $i<4; $i++) { // externo
  for ($j=5; $j<7; $j++) { // interno
    echo "$i $j<br>";
  }
}

    ?>

    
</body>
</html>