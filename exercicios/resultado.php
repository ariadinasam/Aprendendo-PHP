<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
    $inicio=$_GET["valorA"];
    $final=$_GET["valorB"];
    $selecao=$_GET["selecao"];
    while($selecao="v1"){
        echo ($inicio.$final)+2;
        $selecao++;
    }
    ?>
</body>
<a href="index.php" class="voltar">Voltar</a>
</html>


