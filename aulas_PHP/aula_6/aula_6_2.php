<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $num = isset($_POST['nump'])?$_POST['nump']:1;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Primo?</title>
    <link rel="stylesheet" href="../styles_aulas/style_aula6.css">
</head>
<body>
    <fieldset><legend><?php echo "<h2><u>Analisando o número $num...</u></h2>";?></legend>
        <?php
            $lista_multiplos = array();
            
            for ($n=1; $n<=$num; $n++) { // Loop para verificar a quantidade de numeros multiplos do valor dado pelo usuario.
                if ($num%$n == 0) {
                    $lista_multiplos[] = $n; //Adiciona o valor na lista criada - indices nao sao importantes...
                }
            }

            echo "Valores múltiplos:";
            for($i=0; $i<sizeof($lista_multiplos); $i++) {
                echo " $lista_multiplos[$i] ";
            }
            echo "<br/>";
            $size = sizeof($lista_multiplos);
            echo "Total de múltiplos: $size<br/>";
            echo "<br/><scan id='resultado'>Resultado:</scan> $num ";
            if ($size>2) {
                echo "<scan id='p'><strong>NÃO É PRIMO</strong></scan>.";
            } else {
                echo "<scan id='p'><strong>É PRIMO</strong></scan>.";
            }
        ?>
    </fieldset>
</body>
</html>