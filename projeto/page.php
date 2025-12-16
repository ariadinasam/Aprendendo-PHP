<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
    <link rel="stylesheet" href="/projeto/styles.css">
</head>
<body style="background-color: cornsilk;">
    <form method="get" action="/projeto/pages.php">
    <?php 
    $opc= isset($_GET["opc"])?$_GET["opc"]:0;
    switch($opc){
        case 1:
            echo "Preencha o formulário";
            echo '<br>nome: <input type="text" name="nome"/> <br>' ;
            echo '<br>email: <input type="text" name="email"/><br>';
            echo '<br>numero: <input type="number" name="numero"/><br> ';
            echo '<br>cpf: <input type="number" name="cpf"/> <input type="submit" name="forms"/><br>';
            break;
        case 2:
            echo "Escreva algo para ver em reverso:";
            echo '<input type="text" name="rev"/><input type="submit"  value="enviar"/>';
            break;
        case 3:
            echo"Digite os números:  ";
            echo "Valor 1  <input type=text name='num1'>";
            echo "Valor 2  <input type=text name='num2'><br>";
            echo "<br>Selecione a operação: "; 
            echo "<select name=selecao>
            <option>Adição +</option>
            <option>Subtração -</option>
            <option>Multiplicação *</option>
            <option>Divisão/</option>
            </select>";
            echo '<input type="submit" value="enviar"/>';
            break;
        case 4:
            echo "Digite o que quer repetir:";
            echo '<input type="text" name="rep" /><input type="submit"  value="enviar"/>';
            break;
        

        default:
        echo "Você não selecionou uma opção válida";
        echo '<br><img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfOguLBsAggSkIcVrH4BkVbG4ul-mMPxFbYQ&s/>';
    }
    ?>
    
    </form>
    <br>
    <a href="/projeto/index.php">Voltar</a>
</body>
</html>