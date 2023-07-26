<?php 

$arr = [10, 20 ,30, 40, 50, 60, 70, 80, 90, 100];
$c = 0;

while ($c < count($arr)){
    $numeroAtual = $arr[$c];
    if ($numeroAtual === 30 || $numeroAtual === 40) {
        #echo "Pulou o passo " . $numeroAtual . '<br>';
        $c++;
        continue;
    }
    echo $numeroAtual . "<br>"; 
    $c++;
}

#ESTE ERA O MEU WHILE. DEPOIS DE TER ASSISTIDO A AULA PUDE VER QUE MEU WHILE PODERIA SER OTIMIZADO COLOCANDO A VAR $numeroAtual para substituir todos os $arr[$c];

/*
while ($c < count($arr)){
    
    if ($arr[$c] === 30 || $arr[$c] === 40) {
        echo "Pulou o passo " . $arr[$c] . '<br>';
        $c++;
        continue;
    }
    echo $arr[$c] . "<br>"; #o erro que estava acontecendo foi por causa que eu coloquei este echo antes do  if;
    $c++;
}
*/

?>