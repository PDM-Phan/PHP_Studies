<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
    <link rel = "stylesheet" href = "styles_aulas/style_aula1.css">
</head>
<body>
    <h1>Testando PHP....</h1>
    <section>
    <?php
        // Criando variaveis para testar
        $idade = 21;
        $nome = "Pedro";
        //echo "<h2>Olá Mundo!</h2>"; // é possivel usar formatação html dentro de um echo
        //printf("<h2>Meu nome é %s e tenho %d anos.</h2>", $nome, $idade); // É possivel fazer uma string formatada com stringf
        echo "<h2>Meu nome é $nome e tenho $idade anos.</h2>"; // Porém também é possivel de fazer com o echo (mais facil e intuitivo.)
        // ^- é necessário que seja aspas duplas, aspas simples não há interpretação de variaveis
        
    ?>
    </section>


</body>
</html>