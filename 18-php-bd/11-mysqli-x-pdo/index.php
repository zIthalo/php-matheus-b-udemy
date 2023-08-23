<?php 
/*      mysqli x PDO

    - O mysqli é uma extensão do próprio PHP para conectar ao banco MySQL, e tem uma proximidade do código nativo, sendo mais rápida do que a PDO;
 
    - PDO é uma API para conexão de bancos de dados, não limitada ao MySQL, que abstrai alguns conceitos com código PHP tornando esta abordagem mais lenta;
 
    - Ambas as formas podem ser utilizada da forma orientada a objetos;
 
        CONECTANDO COM mysqli

    - Para conectar ao MySQL com o mysqli é muito simples, precisamos utilizar a função mysqli_connect; 
 
    - Passar os parâmetros de: host, usuario, senha e banco de dados
 
    - Com a conexão feita podemos utilizar as queries;
 
    - Exemplo: 
    $conexao = new mysqli("host", "user", "pass", "db");

 
*/


$host = 'localhost';
$user = 'root';
$pass = 'Mor190916.';
$base = 'curso_php';

$conn = new mysqli($host, $user, $pass, $base);

?>