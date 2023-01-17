<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script>
        <?php 
            $inicio = isset($_POST['inicio'])?$_POST['inicio']:0;
            $final = isset($_POST['final'])?$_POST['final']:0;
            $passador = $_POST['passador'];
        ?>
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_aulas/style_aula5.css">
    <title>Contador Personalizado</title>
</head>
<body id="paginaC">
    <section>
        <?php 
            if ($inicio > $final) {
                $passador *= -1;
                for ($inicio; $inicio>=$final; $inicio += $passador) {
                    echo " $inicio ";
                }
            } else {
                for ($inicio; $inicio<=$final; $inicio += $passador) {
                    echo " $inicio ";
                }
            }
            
        ?>
    </section>
    <br/><a href="aula_5.html">Voltar</a>
</body>
</html>