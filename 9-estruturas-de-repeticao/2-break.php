<?php 
/*
*Podemos sair de um loop while antes do seu fim;
*Para isso é necessário adicionar uma instrução break;
*Após interpretada, o loop será automáticamente finalizado;
*Geralmente inserimos esta instrução em uma condição if
*/


$x = 0;

while($x < 10){
    echo " O x é igual a $x <br>";
    if ($x === 5) {
        echo "Terminando o while";
        break;
    }
    $x++;
}
echo "Saiu do loop";
?>