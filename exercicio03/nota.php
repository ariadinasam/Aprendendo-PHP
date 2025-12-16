<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body style="background-color: burlywood";>
    <?php
    $n1=$_GET["nota1"];
    $n2=$_GET["nota2"];
    $media=($n1+$n2)/2;

    if($media>=6){
        echo "Sua média é $media. Você está aprovado!";
    }
    else{
        echo "Sua média é $media. Você está reprovado!";
    }
    ?>
</body>
</html>