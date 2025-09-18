<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Dados e Concatenação</title>
</head>
<body>
    <h1> Lição de Casa - Tipo de Dados </h1>
    <?php 
    $int1=-10; // decimal
    $int2=010; // octal
    $int3=0b10; // binário
    $int4=0x10; // hexadecimal
        echo "int1=$int1<br>int2=$int2<br>";
        echo "int3=$int3<br>int4=$int4<br>";

    $nota = 9.75; // tipo real, ou seja float ou double
    $preco = 100.50;
        echo "<br>nota=".$nota;
        echo "<br>preco=".$preco;
        echo "<br>";
    $nome="Carlos";
    $sobrenome='Almeida';
        echo $nome." ".$sobrenome."<br>"; // o "ponto" serve como junção das variáveis às strings, transformando tudo em uma String.
        echo "$nome $sobrenome<br>";
        echo '$nome $sobrenome<br>'; // quando usado as aspas simples, simplesmente mostrará na tela de saída, o próprio código, e não o valor atribuído a ele
        echo $nome."<br>";
        echo $nome. $sobrenome;
        echo "<br>";
        echo '$sobrenome<br>'; // resultado o próprio comando
        echo $sobrenome."<br>"; // valor da variável + o conteúdo dentro da strings, neste caso a quebra de linha
        echo "$sobrenome é o sobrenome de Carlos<br>"; // valor será interpretado automaticamente e sairá junto ja com o restante do texto pois está em aspas dupla.
    $_var=true;
        echo $_var."<br>";

    echo "<br <br>";
    echo "<h1> Concatenação PHP</h1><br>";

    $nome1="Leandro";
    $sobrenome1=" Marc Santos Pereira";
    $idade=25;
    $nomeCompleto=$nome1.$sobrenome1; // o "ponto" serve como junção ou soma dos dois elementos, isto é a concatenação.
       
    echo "Meu nome é ".$nomeCompleto.", e eu tenho ".$idade."anos<br>"; // neste caso está jutando o texto com o valor da variável, ou seja "Meu nome é" + o resultado da variável nome
        //ou seja o resultado na saída será "Meu nome é Leandro Marc Santos Pereira, e eu tenho 25 anos"
        
        echo "$nomeCompleto, você tem $idade anos"; // neste caso , pelo fato das variáveis ja estarem dentro das aspas duplas, o valor serar interpretado automaticamente.
    
    ?>
</body>
</html>