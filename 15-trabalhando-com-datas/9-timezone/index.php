<?php 
/*
    -O php por padrão vai utilizar o fuso horário da máquina que está sendo executado, ou seja, do servidor;
    -Porém podemos alterar manualmente o fuso com a opção date_default_timezone_set;
    -Esta função recebe como parâmetro o novo fuso horário em STR;
*/
// para deixar com o fuso horário do brasil são paulo 1º eu dou este comando ↓ e depois crio o objeto da classe DateTime();
date_default_timezone_set('America/Sao_Paulo');
$data = new DateTime();
print_r($data);
echo '<br>';

?>