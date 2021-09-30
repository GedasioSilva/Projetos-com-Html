<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale-Conosco</title>
</head>
<body>
    <div>
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Desconhecido";
        $ano = isset($_GET["ano"])?$_GET["ano"]:2021;
        $eml = isset($_GET["eml"])?$_GET["eml"]:"Desconhecido";
        $idade = date("Y") - $ano;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Sexo Generico";

        echo "Nome $nome <br>
         Idade:$idade Anos  <br>
         Email:$eml <br>
         Sexo: $sexo";


        ?>
            <a href="Fale-Conosco.html">Voltar</a>
    </div>    
</body>
</html>