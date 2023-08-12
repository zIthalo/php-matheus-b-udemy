<?php 
/*
    - Podemos calcular a diferença entre duas datas com o método diff();
    - O resultado pode ser formatado com format
    -Ex:
        $diferenca = $dateA->diff($dateB);
        Criamos duas vars dateA e dateB
        E fazemos a comparação, ou seja, a diferença e salvamos na var diferenca
*/

$dateA = new DateTime();
$dateB = new DateTime();

$dateB->setDate(2020,12,25);

print_r($dateA);
echo '<br>';

print_r($dateB);
echo '<br>';

$diferenca = $dateA->diff($dateB);
print_r($diferenca);
echo '<br>';
//Saída: DateInterval Object ( [y] => 2 [m] => 7 [d] => 17 [h] => 23 [i] => 59 [s] => 59 [f] => 0.999996 [invert] => 1 [days] => 959 [from_string] => )

#Se eu quiser mostrar a diferença entre dias de uma data para outra, só poderei fazer isto depois de ter passado o método diff

echo $diferenca->format("%a days");
echo '<br>';
// Saída: 959 days no dia 12/08/2023;



?>