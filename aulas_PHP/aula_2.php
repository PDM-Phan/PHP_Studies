<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <link rel = "stylesheet" href = "styles_aulas/style_aula2.css">   
</head>
<body>
    <u><h1>Cauculadora Simples PHP</h1></u>
    <section>
        <form action="" method="post">
            <br>
            <label for="number1">Primeiro número:</label>
            <input type = "number" name = "number1" id = "number1" min = 0 max = 9999></input><br><br>
            <label for="number2">Segundo número:</label> 
            <input type = "number" name = "number2" id = "number2" min = 0 max = 9999></input><br><br>
            <input type="submit" value="+" name="operacao">
            <input type="submit" value="-" name="operacao">
            <input type="submit" value="*" name="operacao">
            <input type="submit" value="/" name="operacao">
        </form>
    </section>
    <section>
        <?php 
            if(array_key_exists('operacao', $_POST)) {
                $n1 = $_POST['number1'];
                $n2 = $_POST['number2'];
                $operacao = $_POST['operacao'];
                caucula($n1, $n2, $operacao);
            }
            function caucula($number1, $number2, $op) {
                if($op == "+") {
                    echo "resultado => ".($number1 + $number2);
                }
                else if($op == "-") {
                    echo "resultado => ".($number1 - $number2);
                }
                else if($op == "*") {
                    echo "resultado => ".($number1 * $number2);
                }
                else {
                    echo "resultado => ".($number1 / $number2);
                }
            }
        ?>
    </section>
</body>
</html>