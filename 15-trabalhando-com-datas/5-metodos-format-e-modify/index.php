<?php 
/*
    - Os métodos format() e modify() são da classe DateTime e nos ajudam a manipular os dados nestes objetos;
    - format()=> formata a data;
    - modify() => altera a data;

*/
$date = new DateTime();
# O format serve para eu dizer com eu quero que seja exibida a data algo similar como eu fiz com o date('d/m/y')
echo $date->format('d/m/y') . '<br>';
echo $date->format('D - M - Y') . '<br>';
// O modify é como se fosse o strtotime('')
 $date->modify('+5 days'); # primeiro eu guardo a data na var
 # depois eu mostro:
 echo $date->format('d/m/y') .'<br>';
 # posso adicinar/subtrair dias, mêses e anos de qualquer datas assim com o modify, somente substituindo o operador, a quantidade e se será ano, dia ou mês

?>