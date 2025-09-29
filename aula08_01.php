<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_01 -  25 Setembro</title>
</head>
<body>

<h1>OPERADORES DE COMPARAÇÃO - Aula 08_01 - 25 SET</h1>
<h2>Relacionais</h2>
    <?php
$a=10; // valor 10 do tipo inteiro
$b="10"; // string 
echo "Igualdade = ".($a==$b)."<br>"; //1 // true 
echo "Idêntico = ".($a===$b)."<br>"; // //false
echo "Não igual = ".($a!=$b)."<br>"; // //false
echo "Não Idêntico = ".($a!==$b)."<br>"; //1 //true

echo "<hr>";

$a=10; // 10 tipo int
$b=10;  // 10 tipo int
$c=11;  // 11 tipo int
echo "Menor: ".($a<$b)."<br>"; // 0 // false
echo "Menor ou igual: ".($a<=$b)."<br>"; // 1 // true   // qlqr um q for verdadeiro 
echo "Maior: ".($c>$b)."<br>"; // 1 // true
echo "Maior ou igual: ".($c>=$b)."<br>"; // 1 // true

/*
= atribuição
== iguais
=== idênticos
*/
?>
<hr>
<h2>Operadores Lógicos</h2>

    <?php 

    echo "<h4>Operador não not !</h4> ";
    $a=50;
    $b=120;
    $c= ($a<=$b); // true // 1
    $d= !($a<=$b);// false //  //
    var_dump($c);
    echo "<br>";
    var_dump($d);

    echo "<hr>";
    echo "<h4>Operador E and &&</h4>";

    $e=(($a<=$b) &&  ($a>=200)); //V && F // false
    // $e=(($a<=$b) && !($a>=200)); //V && V // True -- situação para transformar em verdadeiro 
    // utilizando o operador Not ! 
    var_dump($e); // boolean // false

    echo "<h4>Operador Ou or || </h4>";
    // no operador ou, our, basta apenas umas das condições precisam ser verdadeira, 
    //para que o resultado seja verdadeiro
    $f=(($a<=$b) || ($a>=200)); // V // F // true

    // $f=(!($a<=$b) || ($a>=200)); // V // F // true --  transformando em falso usando o not
    var_dump($d);
    echo "<br>";
    var_dump($f);

    echo "<h4>Operador Xor</h4>";
    // No operador xor, o resultado só da verdadeiro, as condições precisam ser diferentes
    $g=(($a<=$b) xor ($a>=200)); // V // F // true
    var_dump($g);

    echo "<h4> Operador Ternário</h4>";

    $a=50; 
    $b=120;
    $c=200;
    $d=($a<=$b) ? "Verdadeiro" : "Falso"; // 1 //verdadeiro 
    $e=($a>=$c) ? "Verdadeiro" : "Falso"; //  // falso
    echo "d = $d<br>e = $e";

    // $d=!($a<=$b) ? "Verdadeiro" : "Falso"; "F";
    // $e=!($a>=$c) ? "Verdadeiro" : "Falso"; "V"


?>

    
</body>
</html>