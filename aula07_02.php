<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES</title>
</head>
<body>
    <h1> Aula07_02 - 18/09/25 - Operadores Lógicos </h1>
    <hr>
    <h2>Operadores Lógicos</h2>
    <?php
    echo "<h3> Operador não - not - ! </h3>";
    $a = 50;

    $b = 120;

    $c = ($a<=$b); /* $c = a comparação entre $a e $b , no caso $c é igual a TRUE, 
    pois $a(50) é menor que $b(120), sendo assim $c=1 */

    $d = !($a<=$b);
    
    /* -- a operação " ! not " ela verifica se uma condição é verdadeira ou falsa, e inverte.
     -- por exemplo: um futuro condutor não pode ser menor de idade para tirar habilitação
     Sendo ele de menor, ele atendeu a condição, ou seja TRUE, e então não será permitido,
     sendo assim a validação dele para iniciar o Processo de habilitação será negado, ou seja FALSE

     -- caso ele ser maior de idade, ele não "ativou" a condição, ou seja, é de maior, então pode iniciar o processo, TRUE.

    Condição TRUE > Resulta em False
    Condição FALSE > Resulta em TRUE
    */

    var_dump($c); // mostrar o tipo da variável e seus dados
    echo "<br>";
    var_dump($d);
    
    ?>
    <h3>Operador E - and - &&</h3> 
    <!-- o Operador E and &&, solicita que todas as condições sejam verdadeiras para que seja verdadeira, 
     caso qlqr uma condição entre duas ou mais condições forem falsa, ela por completa será falsa -->
    <?php
    $a=50;
    $b=120;
    $e=200;


    $f=(($a<=$b) and ($a<=$e)); // $f= TRUE, pois $a é menor ou igual a $b, e menor ou igual a $e
    $g=(($a<=$b) &&  ($a>=$e)); // $g= FALSE, pois $a é menor ou igual a $b, porém $a não é maior ou igual a $e --  ou seja TRUE e FALSE, sendo assim FALSE.
    var_dump($f); // TRUE
    echo "<br>";
    var_dump($g); // FALSE  

    ?>
    <h3> Operador Ou - Or - ||</h3>
    <!-- o Operador Ou - Or - || ele necessita que apenas uma condição seja verdadeira entre para que seja Verdadeira, TRUE+TRUE=TRUE, TRUE+FALSE=TRUE-->

    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a>=$b) or ($a>=$c)); //FALSE // $a não é maior ou igual a $b, ou seja false, tanto quanto $a tbm não é maior ou igual a $c -- ambas são falsas.
    $e=(($a>=$b) || ($a<=$c)); // TRUE // $a não é maior ou igual a $b, ou seja false, porém $a é menor ou igual a $c -- uma é verdadeira.
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>
    <h3>Operador XOR</h3>
    <!-- operador xor é um operador lógico exclusivo (ou seja, OU exclusivo).
     Retorna true se apenas uma das condições for verdadeira. -->

     <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) xor ($c<=$a)); //TRUE pois $a é menor ou igual a $b , mas $c não menor ou igual a $a, retornou apenas uma alternativa Veridadeira
    $e=(($a>=$b) xor ($a>=$c)); // FALSE, pois ambas alternativas são falsas
    var_dump($d);
    echo "<br>";
    var_dump($e);

?>
    <h2>Operador Ternário</h2>
    <!--O operador ternário em PHP é uma forma curta de escrever um if ... else.
    Ele é chamado ternário porque trabalha com três partes: -->

    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=($a<=$b) ? "Verdadeiro" : "Falso"; //$a é menor ou igual a $b ou seja vai retornar Verdadeiro
    $e=($a>=$c) ? "Verdadeiro" : "Falso"; // $a não é maior ou igual a $c , ou seja vei retornar falso
    echo "d = $d<br>e = $e<br>";

    $idade=18;

    $resultado=($idade>=18) ? "Maior de Idade" : "Menor de Idade<br>"; 

    echo "$resultado";

    ?>

</body>
</html>