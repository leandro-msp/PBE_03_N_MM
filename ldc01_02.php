<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Dados</title>
</head>
<body>
    <h1> Manipulação de Dados </h1><br>
    <h4> Declaração de Variáveis</h4><br>
    <?php
        // AS VARIÁVEIS EM PHP NÃO EXISTE A DECLARAÇAO DE TIPOS, PORTANDO O TIPO ESTA RELACIONADO AO VALOR ATRIBUÍDO PARA VARIÁVEL.
        // Ou seja, não há a necessidade de escreve a frente do nome dado, o tipo a qual ela pertence "$nome(string)="
        // sendo assim, o valor que foi colocado a frente dela, automaticamente será decetado seu tipo.

        $a=15;  // esta variável será do tipo inteira
        $nota =9.5;  // variável nota sera do tupo float
        $nome= "Juliana";  // viriável nome será do tupo string

        echo $a."<br>";
        echo $nota."<br>";
        echo $nome."<br>";  // utilizando concatenação para juntar variável com string

        echo "<h2>Conversão de variáveis</h2><br>";

        /* 
        conversões permitidas:
        (int), (integer) = converte para inteiro 
        (bool), (boolean) = converte para booleano
        (float),(double), (real) = converte para número com ponto flutuante
        (string) =  converte para string 
        */

        $nota=8.5;
        $novaNota= (int)$nota; // colocando a conversão antes do nome da varíavel que deseja converter. Ele vai transformar a variável $nota que é tipo real, no tipo inteiro.
                                // tendo feito isto, o número da casa decimal será ignorado
        var_dump($nota);
            echo "<br>";
        var_dump($novaNota); //mostrando o tipo da variável e seu conteúdo
        
        echo "<br>";
        $nota1=9.5;
        echo $nota1."<br>";
        $notaFormatText= (string)$nota1;
        var_dump($notaFormatText);
                echo "<br>";
                echo $notaFormatText;
        
        echo "<h2>Constantes</h2><br>";

        define("DIA",24);
        $MES= 30 * DIA;
            echo "Um mês possue ".$MES." horas<br>";

        define("NUMSALA",314);
        DEFINE("SALA","Sala");
        $valor = NUMSALA + 1;
            
            echo SALA."-".$valor;

            echo "<br>";

        $nome3="Kessia ";
        $sobrenome3="Santos ";
        $nomeCompleto2= $nome3.$sobrenome3;

        echo $nome3." " ;
        echo $sobrenome3."<br>";
        echo "Kessia Santos<br>";
        echo $nomeCompleto2."<br>";
        echo $nome3." ".$sobrenome3;

    ?>
    
</body>
</html>