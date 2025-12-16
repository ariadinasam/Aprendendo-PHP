<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <div>
        <form method="get" action="/exercicios/resultado.php"> 

    Inicio: <input type="number" name="valorA" value="numA" style="margin-bottom: 10px;"/></br>
    Final: <input type="number" name="valorB" value="numB" style="margin-bottom: 10px;"/></br>
    Incremento: <select name="selecao">
        <option name="num" value="v1">2</option>
        <option name="num" value="v5">5</option>  
        <option name="num" value="v10">10</option>
    </select>
    <input type="submit" value="enviar" style="margin-bottom: 10px;"/>
    </div>
    </form>
   
</body>
</html>