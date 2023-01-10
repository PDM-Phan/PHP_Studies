<!DOCTYPE html>
<html lang="pt-br">
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
            <fieldset><legend><h2>Cauculadora</h2></legend>
            <br>
            <label for="number1">Primeiro número:</label>
            <input type = "number" name = "number1" id = "number1" min = 0 max = 9999></input><br><br>
            <label for="number2">Segundo número:</label> 
            <input type = "number" name = "number2" id = "number2" min = 0 max = 9999></input><br><br>
            <input type="submit" value="+" name="operacao">
            <input type="submit" value="-" name="operacao">
            <input type="submit" value="*" name="operacao">
            <input type="submit" value="/" name="operacao">
            </fieldset>
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
                $res=0;
                if($op == "+") {
                    $res = $number1 + $number2;
                    echo "<h2>resultado => <u>$res</u></h2>";
                }
                else if($op == "-") {
                    $res = $number1 - $number2;
                    echo "<h2>resultado => <u>$res</u></h2>";
                }
                else if($op == "*") {
                    $res = $number1 * $number2;
                    echo "<h2>resultado => <u>$res</u></h2>";
                }
                else {
                    $res = $number1 / $number2;
                    echo "<h2>resultado => <u>$res</u></h2>";
                }
            }
        ?>
    </section>
</body>
</html>