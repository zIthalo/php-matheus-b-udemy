<?php 
include_once("db.php");
include_once("dao/carDAO.php");

$carDao = new CarDAO($conn);

$cars = $carDao->findAll();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: paleturquoise;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        form{
            text-align: center;
        }
        form #salvar{
            margin-left: 200px;
        }
    </style>
</head>
<body>
    <h1>Insira um Carro</h1>
    <form action="process.php" method="post">
        <div>
            <label for="brand">Marca do Carro:</label>
            <input type="text" name="brand" id="brand" placeholder="Digite a marca do carro">
        </div>
        <div>
            <label for="km">KM do Carro:</label>
            <input type="text" name="km" id="km" placeholder="Digite a km do carro">
        </div>
        <div>
            <label for="color">Cor do Carro:</label>
            <input type="text" name="color" id="color" placeholder="Digite a cor do carro">
        </div>
       <input id="salvar" type="submit" value="Salvar">
    </form>
        <ul>
            <?php foreach($cars as $car):?>
            <li><?=$car->getId()?> - <?=$car->getBrand()?> - <?=$car->getKm()?> - <?=$car->getColor()?> </li>
            <?php endforeach;?>
        </ul>

</body>
</html>