<?php 
/*
    - Como dito anteriormente $_SERVER tem diversas informações importantes

    - SERVER_SOFTWARE = Identificação do servidor;

    - SERVER_NAME = Hostname, DNS ou IP do servidor;

    - SERVER_PROTOCOL = Protocolo do servidor;

    - SERVER_PORT = Porta do servidor;

    - QUERY_STRING = Argumentos após o ? na URL;
*/
print_r($_SERVER);
// Este comando acima retornará um array gigantesco. Mas como fazer para retornar somente uma chave deste array? Veja os exemplos abaixo:
echo '<br>';
echo '<br>';
echo '<br>';
echo $_SERVER['MYSQL_HOME'] . '<br>';
// com essas informações eu posso criar ifs para fazerem alguma ação caso o usuario esteja em determinada página do server;
// Se o nome do servidor for localhost↓
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    echo 'Está acessando o localhost <br>';
} 
?>