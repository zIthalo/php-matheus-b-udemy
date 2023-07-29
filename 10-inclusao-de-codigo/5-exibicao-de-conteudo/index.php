<?php 

    /*
        -Muito parecida com as short tags, podemos exibir o conteúdo sem o echo;
        -ÓTIMA ESTRATÉGIA PARA RESUMIR AS CHAMADAS PHP APENAS PARA EXIBIÇÃO DE VALORES;
        -EX:
            <?= "TESTE"; ?>
    
    */
    $nome = "ithalo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exibindo conteúdos sem o echo</title>
</head>
<body>
    <div>
        <!-- <input type="text" name="" id="" value="ao invés de eu fazer assim → <'?php echo $nome; ?'>" > -->
        <input type="text" name="" id="" value="<?=$nome;?>"> <!--<'?=$nome;?> isto só serve para exibir conteúdos php e não para criar lógicas -->
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</body>
</html>