<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas</title>
</head>
<body style="background-color: lightpink;">
    <div>
    <!--<?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor é igual a " . number_format($rq,2);
    ?>  -->  
    </div>
    <div>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:(["Não informado"]);
    ?>    
    </div>
    <div>
    <?php
    $date = isset($_GET["ano"])?$_GET["ano"]:(["Não informado"]);
    $idade = date("Y") - $date;
    echo "A sua idade é $idade";     
    ?>    
    </div>
    <div>
    <?php
    $gen = isset($_GET["sexo"])?$_GET["sexo"]:(["Não informado"]);
    echo "Seu gênero é $gen";
    ?>    
    </div>
    <a href="index.html">Voltar</a>
</body>
</html>
