<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
    <style>
        section {
            padding: 15px;
            width: 500px;
            margin: auto;
            margin-top: 50px;
        }
        h1 {
            /*estilo especifico para o h1(titulo)*/
            color: rgb(0, 0, 0);
            text-shadow: 1px 1px 1px;
            text-align: center;
        }

        h2 {
            /*estilo especifico para o h2(titulo)*/
            color: rgb(64, 121, 143);
            /*text-shadow: 2px 2px 2px #458c9743;*/
            text-align: center;
            
        }

        p {
            color: rgb(0, 0, 0);
            text-shadow: 1px 1px 1px;
        }
    </style>
</head>
<body>
    <h1>Testando PHP....</h1>
    <section>
    <?php
        // Criando variaveis para testar
        $idade = 15;
        $nome = "Pedro";
        //echo "<h2>Olá Mundo!</h2>"; // é possivel usar formatação html dentro de um echo
        //printf("<h2>Meu nome é %s e tenho %d anos.</h2>", $nome, $idade); // É possivel fazer uma string formatada com stringf
        echo "<h2>Meu nome é $nome e tenho $idade anos.</h2>"; // Porém também é possivel de fazer com o echo (mais facil e intuitivo.)
        // ^- é necessário que seja aspas duplas, aspas simples não há interpretação de variaveis
        
    ?>
    </section>


</body>
</html>