<?php 
/*              Habilitando a PDO
    - Antes de começar de fato utilizar a PDO, é necessário checar se a lib está habilitada
    
    - Vamos checar no php.ini por duas linhas, e descomentar caso estejam:
    php_pdo
    php_pdo_mysql
    (se não achar procure por pdo)
    (ctrl + f para pesquisar estes nomes);
    (Depois de descomentar, reiniciar o servidor);

        CONEXÃO COM PDO
    
    - A conexão com pdo é um pouco diferente do mysqli, mas vamos informar basicamente os mesmos parâmetros;

    - Que são: banco de dados, host, nome do banco, usuário e senha

    - Exemplo:
    $conn = new PDO("mysql:host=localhost;dbname=teste",$user,$pass);
    ou
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

*/

$user = 'ithalo';
$pass = '123';
$host = 'localhost';
$db = 'curso_php';

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
if ($conn = true) {
    echo 'funcionou';
}
?>