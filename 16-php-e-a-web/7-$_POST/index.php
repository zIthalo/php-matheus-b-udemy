<?php 
/*
    -Vamos precisar criar um form e definir o método como POST, e também o arquivo ou rota que vamos acessar em action;

    - No lado do servidor vamos acessar a var $_POST que contém os parâmetros enviados para o servidor;
    
    - Faremos o precessamento e retornaremos algo para o user;

*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<form action="cadastro.php" method="post">
        <section>
        <input type="text" name="marca" placeholder="Marca do carro">
        </section>
        <section>
        <input type="text" name="preco" placeholder="Preço do carro">
        </section>
        <section>
            <input type="checkbox" name="opcionais[]" value="Teto solar">Teto solar
        </section>
        <section>
            <input type="checkbox" name="opcionais[]" value="Película">Película
        </section>
        <section>
            <input type="checkbox" name="opcionais[]" value="Blindado">Blindado
        </section>
        <section>
            <input type="submit" value="Enviar">
        </section>
    </form>
</body>
</html>