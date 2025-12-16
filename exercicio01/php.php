<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localidade</title>
</head>
<body>
    <?php
    $estado = $_GET["selecao"];
    switch($estado){
        case "Nordeste":
            echo "Você está localizado na Região Nordeste";
            break;
        case "Norte":
            echo "Você está localizado na Região Norte";
            break;
        case "Oeste":
            echo "Você está localizado na Região Oeste";
            break;
        case "Sul":
            echo "Você está localizado na Região Sul";
            break;
        case "Sudeste":
            echo "Você está localizado na Região Sudeste";
            break;
        default:
            echo "Você não está localizado";
    }
    ?>
    <a href="/exercicio01/index.html">Voltar</a>
</body>
</html>