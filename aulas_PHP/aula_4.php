<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $nota1 = isset($_POST['nota1'])?$_POST['nota1']:0;
        $nota2 = isset($_POST['nota2'])?$_POST['nota2']:0;
        $media = ($nota1+$nota2)/2;
        $situacao = "";
        if ($media <= 4) {
            $situacao = "REPROVADO";
        } elseif (($media > 4) || ($media < 7)){
            $situacao = "RECUPERAÇÃO";
        } else {
            $situacao = "APROVADO";
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_aulas/style_aula4.css">
    <title>Situação Média</title>
    <style>

    </style>
</head>
<body>
    <section id="situacao">
        A média entre <?php echo $nota1; ?> e <?php echo $nota2; ?> será <?php echo $media; ?><br/>
        A situação do aluno: <?php echo $situacao; ?>
    </section>
    <div>
        <a href="aula_4.html">Voltar</a>
    </div>
</body>
</html>