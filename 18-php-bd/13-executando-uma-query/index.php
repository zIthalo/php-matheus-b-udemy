<?php 
/*      EXECUTANDO UMA QUERY

    - Para executar uma query vamos usar o método query;
 
    - Ele deve ser utilizado a partir do objeto que fez a conexão;
 
    - Vamos receber um determinado retorno como resultado, que podem ser os dados, caso seja um SELECT, por exemplo;
 
    - É importante ao fim de todas as queries fechar a conexão; com o método close;
 
    - Conexões abertas gastam recursos do servidor e prejudica a aplicação;

*/
$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);

//  Query;
$sql = "SELECT * FROM itens";

// Executando query;
$result = $conn->query($sql);
// saída
print_r($result);

// fechamento da conexão para não consumir memoria do server;

$conn->close();
?>