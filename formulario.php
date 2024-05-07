<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tratamiento_datos.php" method="post">
        <input type="radio" name="figura" value="circulo" checked>Circulo<br/> 
        <input type="radio" name="figura" value="cuadrado">Cuadrado<br/>
        <input type="radio" name="figura" value="triangulo">Triangulo<br/>
        <br/>
        <label for="radio">Radio</label>
        <input type="number" id="radio" name="radio" />
        <br/>
        <label for="lado">Lado</label>
        <input type="number" id="lado" name="lado" />
        <br/>
        <label for="base">Base</label>
        <input type="number" id="base" name="base" />
        <br/>
        <label for="altura">Altura</label>
        <input type="number" id="altura" name="altura" />
        <br/>
        <input type="submit">

    </form>
</body>
</html>