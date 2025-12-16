<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores</title>
</head>
<body>
   <?php
        $c = 1;
        while ($c <= 5) {
            $valor = $_GET['v' . $c]; 
            echo "Valor $c: $valor<br/>";
            $c++;
        }
    ?>
</body>
</html>