<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $txt = isset($_GET['t'])?$_GET['t']:"Texto ainda não definido...";
        $cor = isset($_GET['cor'])?$_GET['cor']:"#000000";
        $tam = isset($_GET['tam'])?$_GET['tam']:"12pt";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
    <link rel="stylesheet" href="styles_aulas/style_aula3.css">
    <style>
        /*Um span da classe texto recendo caracteristicas pré(ou não)definidas*/
        h3 {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
            text-align: center;
            margin-top: 40pt;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="get">
            <fieldset><legend><h2 id="legenda">Gerador de Texto Customizavél</h2></legend>
                <label for="itxt">Texto: </label>
                <input type="text" name="t" id="itxt"></br>
                <label for="itam">Tamanho</label>
                <select name="tam" id="itam"> <!--Select : abre uma caixa para escolha dos valores-->
                    <option value="8pt">8</option>
                    <option value="10pt">10</option>
                    <option value="14pt">14</option>
                    <option value="20pt">20</option>
                    <option value="40pt">40</option>
                </select>
                <label for="icor">Cor: </label>
                <input type="color" name="cor" id="icor">
                <input type="submit" value="Gerar">
            </fieldset>
        </form>
    </div>
    <div>
        <!--Área onde mostrará o texto-->
        <h3>
        <?php 
            echo $txt;
        ?>
        </h3>
    </div>
</body>
</html>