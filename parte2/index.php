<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <div>
        <form method="get" action="/parte2/part2.php">
            <?php
                $c = 1;
                while ($c <=5){
                    //$valor = $_GET['v'.$c];
                    // var_dump($valor); die();
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/></br>";
                    $c++;
                }  
            ?>
            <input type="submit" value="Enviar"/>
           
        </form>
    </div>
</body>
</html>