<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de da média</title>
</head>
<body>
    <h1>Aqui estão seus dados, a média da nota</h1>
    <?php
         echo "<pre>";print_r($_REQUEST);echo "</pre><br>";
         $nome=$_POST["nome"];
         $data=$_POST["data"];
         $av1=$_POST["av1"];
         $av2=$_POST["av2"];
         $media=($av1+$av2)/2;


            echo "Nome" .$nome."<br>";
            echo "Data: ".$data."<br>";
            echo "Sua Nota da AV1:".$av1."<br>";
            echo "Sua nota da AV2:".$av2."<br>";

            echo "<h1>Sua média é: $media</h1><br>";

            if ($media>7){
                echo "<h1>Parabéns Você mandou bem!!! Isso mostra que estudou e se preparou, continue assim!!></h1><br>";
                echo "<img src='https://i.ytimg.com/vi/gta47K-63ec/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDUGgmUPyLBOEHGxcsaWdIkZcr1GA' alt='Descrição'>";
            } elseif ($media>=6){
                echo "<h1>Por pouco!! Você passou, mas fique mais atento, redobre seus estudos, e pratique com mais frequência as atividades desenvolvidas em sala!!</h1><br>";
                echo "<img src='https://i.ytimg.com/vi/cCdns-qoCXQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCzRTj1AMktmziv9asZ9LIboo2lsg' alt='pica pau escola'>";
            }elseif($media>=1 && $media<6){
                echo "<h1>Infelizmente você não foi bem nas provas, não fique desapontado com isso, certamente você não focou nos estudos, mas se prepare e vamos recomeçar :) !!</h1><br>";
                 echo "<img src='https://i.ytimg.com/vi/MJ4iEqYE7a8/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBAWU_73eCvSMMAFwaaCe27bcjlmw' alt='Leoncio Puto'>";
            }else{
                echo "<h1>CARACA, VC É MUITO BURRO, NA BOA, SOME DAQUI MEU!!</h1><br>";
                echo "<img src='https://i.pinimg.com/474x/7d/cc/4d/7dcc4dd2a1ddfa5afa43d9b987096c48.jpg' alt='pica pau Puto'>"
                ;
            }
    ?>
    
</body>
</html>