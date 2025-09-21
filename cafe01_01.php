<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça Seu Café</title>
</head>
<body>
   <h1>Prepare seu Café ☕</h1><br>
   <h2>Escolha o ingrediente👇:</h2>
        <form method="post">
            <label>
                <input type="radio" name="ingrediente" value="acucar"> Açúcar
            </label><br>
            <label>
                <input type="radio" name="ingrediente" value="sal"> Sal
            </label><br>
                <input type="submit" value="PREPARAR O CAFÉ">
        </form>

<?php
    

    if($_SERVER["REQUEST_METHOD"]==="POST"){
         $escolha=$_POST["ingrediente"];
        
         if($escolha === "acucar"){
            echo "Seu café ficou ÓTIMO!!☕😋";
         }elseif($escolha === "sal"){
            echo "Seu café ficou HORRIVEL🤮😋😫 !!!";
         }else{
            echo "❓Nenhum Ingrediente foi selecionado!!❓";
         }
        
    }

?>
    
</body>
</html>