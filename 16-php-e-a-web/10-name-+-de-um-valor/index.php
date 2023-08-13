<?php 

/*
    - Os inputs de checkbox podem conter mais de um valor;
    
    - Para receber todos eles noo backend, precisamos adicionar uma sintaxe de array no name;

    - Assim receberemos todos os inputs marcados;

    - ex:
        name="caracteristicas[]"

*/

if (isset($_POST['ingredientes'])) {
    print_r($_POST['ingredientes']);
}
// é importante colocar a sintaxe de array[] nos inputs check box para que o php não entenda que só é para pegar o último valor marcado, e sim pegar todos valores e salvalos em um arr

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="index.php" method="post">
        <section>
            <input type="checkbox" name="ingredientes[]" id="carac" value="Tomate">Tomate
        </section>
        <section>
            <input type="checkbox" name="ingredientes[]" id="carac" value="Jerimum">Jerimum
            
        </section>
        <section>
            
            <input type="checkbox" name="ingredientes[]" id="carac" value="Feijão">Feijão
        </section>
        <section>
            <input type="checkbox" name="ingredientes[]" id="carac" value="Alface">Alface
            
        </section>
        <section>
            <input type="checkbox" name="ingredientes[]" id="carac" value="Cebola">Cebola

        </section>
        <section>
            <input type="submit" value="Enviar">
        </section>
    </form>
</body>
</html>