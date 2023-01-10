<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $txt = isset($_POST['t'])?$_POST['t']:"Texto ainda não definido...";
        $cor = isset($_POST['cor'])?$_POST['cor']:"#000000";
        $tam = isset($_POST['tam'])?$_POST['tam']:"12px";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
    <link rel="stylesheet" href="styles_aulas/style_aula3.css">
    <style>
        /*Um span da classe texto recendo caracteristicas pré(ou não)definidas*/
        #echo {
            font-size = <?php echo $tam; ?>;
            color = <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="post">
            <fieldset><legend><h2 id="legenda">Gerador de Texto Customizavél</h2></legend>
                <label for="itxt">Texto: </label>
                <input type="text" name="t" id="itxt"></br>
                <label for="itam">Tamanho</label>
                <select name="tam" id="itam"> <!--Select : abre uma caixa para escolha dos valores-->
                    <option value="8px">8</option>
                    <option value="10px">10</option>
                    <option value="14px">14</option>
                    <option value="20px">20</option>
                    <option value="40px">40</option>
                </select>
                <label for="icor">Cor: </label>
                <input type="color" name="cor" id="icor">
                <input type="submit" value="Gerar">
            </fieldset>
        </form>
    </div>
    <div>
        <!--Área onde mostrará o texto-->
        <?php 
            echo "<h3 id=echo>$txt</h3>";
        ?>
    </div>
</body>
</html>