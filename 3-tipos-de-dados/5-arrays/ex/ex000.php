<?php 
//criar um array com características de um carro e printar duas

$celta = ['direção hidráulica', 'vidro elétrico', 'airbag', 'ar-condicionado'];

echo $celta[1] . "<br>";
echo $celta[3] . "<br>";

//método com array associativo

$carro = [
    'nome' => 'gol', 
    'vidros' => 'eletricos', 
    'direcao' => 'hidráulica', 
    'velocidadeMax' => 160, 
    'portas' => 4
];
$velocidade = $carro['velocidadeMax'];
$portas = $carro['portas'];
$nome = $carro['nome'];
echo $carro['nome'] . '<br>';
echo $carro['direcao'] . '<br>';
echo '<br>';

echo "<h2> O $nome tem $portas portas e atinge a velocidade máxima de $velocidade km/h </h2>";

?>