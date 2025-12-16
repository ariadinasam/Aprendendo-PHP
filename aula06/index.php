<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
</head>
<body>
    <!--<div>
    <?php
        $resultado = $_GET["resultado"];
        $decisao =($resultado=="s") ?"hoje tem aula":"não tem aula hoje";
        echo "Alunos,  $decisao";

        

    ?>
    </div>-->
        <p style="color: red;">Passou de ano?</p>
    <!--<div>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1+$nota2)/2;
        echo "A sua nota do primeiro bimestre é: $nota1 e a do segundo bimestre é $nota2 e  a média é: $media</br>";
        echo "A sua situação é: " . (($media<7)?"REPROVADO":"APROVADO");
    ?>
    </div>-->

    <div>
    <?php
        $ano = $_GET["ano"];
        $idade = 2025 - $ano;
        echo "Quem nasceu em $ano tem $idade";
        $tipo = ($idade>=18 && $idade<=65)?"OBRIGATORIAMENTE TEM QUE VOTAR":"VOTO OPCIONAL";
        echo "</br>Sua situação = $tipo"
    ?>
    </div>

 
</body>
</html>