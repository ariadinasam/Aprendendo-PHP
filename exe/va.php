<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $val = isset ($_GET["val"])?$_GET["val"]:1;
    echo "<h1>Caculando o valor fatorial de $val</h1>";
    $fat=1;
    $c=$val;
    do {
        $fat=$fat*$c;
        $c--;   
    }while($c>=1);
    echo "<h2>$val != $fat</h2>";
    ?>
    <a href="/exe/index.html"> Voltar</a>
</body>
</html>