<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $num1 = isset($_POST['num1'])?$_POST['num1']:0;
        $num2 = isset($_POST['num2'])?$_POST['num2']:0;
        $num3 = isset($_POST['num3'])?$_POST['num3']:0;
        $num4 = isset($_POST['num4'])?$_POST['num4']:0;
        $num5 = isset($_POST['num5'])?$_POST['num5']:0;
        $acao = $_POST['acoes'];
        function cauculadora($number1, $number2, $number3, $number4, $number5, $acaos) {
            $itens = func_get_args();
            $t_itens = func_num_args();
            if ($acaos=="+") {
                $res = 0;
                for ($i=0; $i<$t_itens; $i++) {
                    if (is_numeric($itens[$i])) {
                        $res += $itens[$i];
                    }
                }
            }
            echo "Resultado da operação é $res.";
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
            cauculadora($num1, $num2, $num3, $num4, $num5, $acao);
        ?>
    </div>
    <div><a href="aula_7.html" class="botao">Voltar</a></div>
</body>
</html>