<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas</title>
    
</head>
<body style="background-color: rgb(195, 163, 224);">
    <!--<div>
    <?php
        $n = 20;
        $nome = "Ariadina";
        echo "$nome tem $n anos"; 
        $n1 = 25;
        $n2 = 18;
        $soma = $n1 + $n2;
        echo "</br> a soma é $soma";
        echo  "</br>a soma vale ".($n1+$n2);
        echo  "</br>a subtração vale ".($n1-$n2);
        echo  "</br>a multiplicação vale ".($n1*$n2); 
        echo  "</br>a divisão vale ".($n1/$n2);
        echo  "</br>a média é ". ($n1+$n2)/2;
        $n3 = $_GET["a"];
        $n4 = $_GET["b"];
        echo "</br> Para saber a soma dos números desejados, digite na url o valor de a&b";
        echo "</br> Exemplo ?a=3&b=5";
        echo "</br>O total da soma é:".($n3+$n4);
        echo "</br>Teste: $n<sup>$nome</sup>";
        ?>
    </div>-->
    <div>
    <!--
    <?php
        $preco = $_GET["p"];
        echo "</br> O preço do produto é: R$" .number_format($preco,2);
        echo "</br> Digite na url quantos % de desconto você deseja.";
        $desconto = $_GET["valor"];
        $precofinal = $preco - ($preco*$desconto/100);
        $precoformato = number_format($precofinal,2);
        echo "</br>O valor de R$$preco com $desconto% é: R$"  . $precoformato;
    ?>
   </div>-->
   <!--<?php
   $atual = $_GET["ano"];
   echo "o ano atual é >$atual";
   echo "</br> o ano anterior é > " . --$atual;
   ?>-->
    <!--<?php
    $a =3;
    $b = &$a;
    $b +=5;
    echo "a variavel A vale $a";
    echo "</br> a variavel B vale $b";
    ?>
    -->
    <?php
    $site = "youtube";
    $$site = "mukbang";
    echo "O conteúdo é um vídeo do $site";
    echo "<br/>O vídeo é $youtube";
    ?>
</body>
</html> 
