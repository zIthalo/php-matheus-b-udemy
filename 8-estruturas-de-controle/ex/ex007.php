<?php 
$vel = 41;
$velMax = 40;

echo "<h2>===========DETRAN PE===========</h2><br>";
echo "<h2>===========VELOCIDADE MÁXIMA DA VIA: $velMax===========</h2><br>";
if ($vel < 40 ) {
    echo "<h3>===========Velocidade correta. Sua velocidade: $vel km/h.===========</h3><br>";
} elseif ($vel === $velMax) {
    echo "<h3>===========Cuidado! Essa é a velocidade máxima da via. Sua velocidade: $vel km/k.===========</h3><br>";
} else {
    echo "<h3>===========Multa, por excesso de velocidade. Sua velocidade: $vel km/h.===========</h3><br>";
}
?>