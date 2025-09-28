<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lição de Casa -Par ou Ímpar</title>
</head>
   
<body>
    <?php
        echo "<h2>ÍMPAR OU PAR COM BASE NA DIVISÃO</h2>";
        echo "<h5>Aluno: Leandro Marc - 925200567</h5>";
        echo "<hr>";
        echo "<h3>Insira o valor na campo abaixo:</h3>";
    ?>
    <form method="post" action="ldc_impPar.php">
        Valor <input type="number" name="valor"> 
        <input type="submit" value="Calcular"><br>
    </form>

    <?php 
        $divisor=2;
        $valor=$_POST["valor"]; // resgata o valor inserido pelo o usuário 
        $resultado= ($valor/$divisor); // tbm nn era necessário criar em si uma variável com nome "$divisor", era somente atribuiir à varível $resultado o seguinte cálculo: ($valor/2).
        $resto= ($valor % $divisor); // possível tbm $resto=($valor % 2)
        $impPar=($valor > 0) ? (($resto == 1) ? "Número Ímpar <br><img src='Imagens/IMPAR.jpg' width='300'>" : "Número Par <br><img src='Imagens/PAR.jpg' width='300'>") // linha do verdadeiro
        : "Nenhum valor inserido"; // linha do falso .. 
        
        // resumidamente o mesmo que $impPar=(resto==1) ? "ímpar" : "Par"; -- porém foi atribuido uma função de imagens dentro da linha de valor verdadeiro

        /*
           -- Na varíavel acima ($impPar) está uma operação ternária, a condição é que, o valor seja acima maior que 0 (zero),
           -- logo sendo verdadeiro ela vai executar o primeiro comando que tbm é uma operação ternária, que é ver ser o resto é igual a 1 , se for verdadeiro ele vai executar primeiro Comando
           que é exibir valor ímpar e a imagem alocada, sendo falso logo ele exibirá par e a outra imagem alocada.
           -- se a condição de Maior que 0 for falsa ele executa o segundo comando - atribuí isto para pois 0 é considerado par, então logo que abri a pagina, imagem ja era exibida

        */
        
        echo "<br>Valor Inserido: $valor<br>";
        echo "Resultado da Divisão é: $resultado<br>";
        echo "O Resto da divisão é: $resto<br>";
        echo "<h2>O valor inserido é um : $impPar</h2>"
    

    ?>
    
</body>
</html>