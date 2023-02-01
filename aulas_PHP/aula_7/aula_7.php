<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        function calculadora($number1, $number2, $number3, $number4, $number5, $acaos) {
            $itens = func_get_args(); // Recebe todos os valores passados na pagina anterior
            $t_itens = func_num_args();
            $new_array; // irá receber apenas aqueles valores que possuem números
            //var_dump($itens);  -> verificar quais os valores totais de itens

            for ($i=0; $i<$t_itens; $i++) { // Loop para criar a nova lista que irá receber apenas as que tiverem inputs
                if ($itens[$i] === "") {
                    unset($itens[$i]);
                }
            }
            $new_array = array_values($itens);// Reorganizar a lista criada, com os index certos

            //var_dump($new_array);  -> verificar quais os valores da nova lista
            $loop = 1;
            $num1 = $new_array[0];
            $num2 = $new_array[1];
            $res = 0;
            switch ($acaos) {
                // Calculo das operações utilizando o algoritimo de fibonacci, apenas com algumas modificações necessárias para a situação
                case "+":
                    while (is_numeric($new_array[$loop])){
                        $loop++;
                        $res = $num1 + $num2;
                        $num1 = $res;
                        $num2 = $new_array[$loop];
                    }
                    break;
                case "-":
                    while (is_numeric($new_array[$loop])) {
                        $loop++;
                        $res = $num1 - $num2;
                        $num1 = $res;
                        $num2 = $new_array[$loop];
                    }
                    break;
                case "*":
                    while (is_numeric($new_array[$loop])) {
                        $loop++;
                        $res = $num1 * $num2;
                        $num1 = $res;
                        $num2 = $new_array[$loop];
                    }
                    break;
                case "/":
                    while (is_numeric($new_array[$loop])) {
                        $loop++;
                        $res = $num1 / $num2;
                        $num1 = $res;
                        $num2 = $new_array[$loop];
                    }
                    break;
                default:
                    while (is_numeric($new_array[$loop])){
                        $res = $num1 + $num2;
                        $num1 = $res;
                        $num2 = $new_array[$loop];
                    }
                    $res /= $loop;
            }
            echo "<span>Resultado da operação é $res.</span>";
        }

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_aulas/style_aula7.css">
    <title>Resultado...</title>
</head>
<body>
    <div>
        <?php
            $num1 = isset($_POST['num1'])?$_POST['num1']:0;
            $num2 = isset($_POST['num2'])?$_POST['num2']:0;
            $num3 = isset($_POST['num3'])?$_POST['num3']:0;
            $num4 = isset($_POST['num4'])?$_POST['num4']:0;
            $num5 = isset($_POST['num5'])?$_POST['num5']:0;
            $acao = $_POST['acoes'];
        
            calculadora($num1, $num2, $num3, $num4, $num5, $acao);
        ?>
    </div>
    <div><a href="aula_7.html" class="botao">Voltar</a></div>
</body>
</html>