<?php 
/*
    - Podemos criar um página que faz o processamento dos dados e também exibe o input de informações, isto é, não preceisa olhar o dev tools para saber qual método foi usado;
    
    - Para isso devemos criar um if que checa se o método de requisição ($SERVER['REQUEST_METHOD']) é GET ou POST;
    
    - Depois criar as duas variações, para cada uma das possibilidades;
    
    -Ou checar se algum parâmetro veio pela requisição e ent~]ao criar as variações;
*/
// echo $_SERVER['REQUEST_METHOD'];
// Saída: GET

$method = $_SERVER['REQUEST_METHOD'];
// Saída: POST

    if (isset($_POST)) {
        $nome = $_POST['nome'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoprocessamento</title>
</head>
<body>
    <?php 
        if($method == 'GET'):
    ?>
    <form action="index.php" method="post">
        <div>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>
    </form>
    <?php 
        else:
    ?>
        <h2>O seu nome é <?=$nome; ?> </h2>
    <?php 
        endif;
    ?>
</body>
</html>