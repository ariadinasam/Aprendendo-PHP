<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>
<body>
    <?php
    $a = isset ($_GET["ano"])?($_GET["ano"]):1900;
    echo "Você nasceu em $a";
    $i = date("Y") - $a;
    echo "</br>Sua idade deve ser $i";

    /*if($i>=18){
        $v="</br>ja pode votar";
        $d="ja pode dirigir";
        echo "$v e $d";
    }
    else{
        $v="</br>nao pode votar";
        $d="nao pode dirigir";
        echo "$v e $d";
    }*/
    if($i<16){
        $voto ="</br>Não vota";
    }
    elseif($i>=16 && $i<18 or $i>70){
            $voto = "</br>Voto opcional";
        }
    else{
            $voto="</br>Voto obrigatório";
        }
    
        
    echo $voto;
    ?>
    
</body>
</html>