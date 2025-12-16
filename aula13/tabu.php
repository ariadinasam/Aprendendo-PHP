<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada2</title>
</head>
<body>
    <div>
    <?php 
    $n = isset($_GET["num"])?$_GET["num"]:1;
    for ($c=1;$c<=10;$c++){
        $r=$n*$c;
        echo "| $n x $c é $r |<br>";   
    }
    ?>
    </div>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>