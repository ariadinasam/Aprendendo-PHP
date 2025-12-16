<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
</head>
<body>
    <?php
    $n = isset($_GET["num"])?$_GET["num"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:1;
    switch($o){
        case 1:
            $r = $n*2;
            break;
        case 2:
            $r = $n^3;
            break;
        case 3:
            $r = sqrt($n);
            break;
    }
     echo "o resultado da operação foi $r";
    ?>
    <?php
    $op = isset($_GET["num"])?$_GET["num"]:0;
    switch($op){
        case 1:
        case 2:
        case 3:
            echo "Tipo 1";
            break;
        case 4:
        case 5:
            echo "Tipo 2";
        default:
            echo "Tipo 3";
    }
    ?>
    <a href="/aula10/index.html"></br>Voltar</a>
</body>
</html>