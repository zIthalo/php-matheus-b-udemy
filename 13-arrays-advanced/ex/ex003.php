<?php 
/*
    -criar um array com os seguintes valores: ['jaguar', 3.0, 'azul', 'teto solar', 'automático'];
    -Chame este array de $carro;
    -Crie variáveis com base neste array;
*/

$carro = ['Jaguar', 3.1, 'azul', 18, 'teto solar', 'automático'];
list($marca, $motor, $cor, $aro, $teto, $cambio) = $carro;
echo "Meu carro é da marca $marca<br>Ele tem um motor de $motor<br>Tem a cor $cor<br>Com rodas $aro<br>Tem $teto<br>E tem câmbio $cambio";
?>