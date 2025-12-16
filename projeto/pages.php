<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body style="background-color: cornsilk;">
    <?php 
        if (isset($_GET["forms"])) {
            $nome = $_GET["nome"] ?? "";
            $email = $_GET["email"] ?? "";
            $numero = $_GET["numero"] ?? "";
            $cpf = $_GET["cpf"] ?? "";
            echo "Obrigada por mandar os dados<br>";
            echo "Segue os dados enviados: <br> $nome <br> $email <br> $numero <br> $cpf";
            }elseif(isset($_GET["selecao"])) {
            $n1 = $_GET["num1"] ?? 0; 
            $n2 = $_GET["num2"] ?? 0;
            $selecao = $_GET["selecao"];
            switch($selecao){
                case "Adição +":
                    $total=$n1+$n2;
                    echo "O resultado de $n1 + $n2 é $total <br>";
                    break;
                case "Subtração -":
                    $total=$n1-$n2;
                    echo "O resultado de $n1 - $n2 é $total";
                    break;
                case "Multiplicação *":
                    $total=$n1*$n2;
                    echo "O resultado de $n1 * $n2 é $total";
                    break;
                case "Divisão /":
                    $total=$n1/$n2;
                    echo "O resultado de $n1 / $n2 é $total";
                    break;
                default:
                    echo "Você não digitou uma opção válida";
                    echo '<br><img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfOguLBsAggSkIcVrH4BkVbG4ul-mMPxFbYQ&s/>';
                break;
                }
            }elseif(isset($_GET["rev"])){
                $rev= $_GET["rev"] ?? "";
                print("o reverso de $rev é " . strrev($rev));
            }elseif(isset($_GET["rep"])){
                $rep = $_GET["rep"] ?? "Você não escreveu nada";
                $rep= $_GET["rep"];
                for ($i = 1; $i <= 1000; $i++){
                    echo "$rep <br>";
                }
                
        }
    ?>
    <a href="/projeto/index.php"><br>Voltar</a>
</body>
</html>