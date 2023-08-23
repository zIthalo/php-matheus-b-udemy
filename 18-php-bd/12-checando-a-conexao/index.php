<?php 
/*      Checando a conexão
    
    - Para verificar se houve algum erro na conexão podemos utilizar a propriedade connect_errno;
 
    - E para verificar o erro podemos utilizar o método connect_error();
 
    - Podemos inserir a checagem em um if e mostrar a mensagem de erro com um echo, por exemplo;
 

*/
$host = "localhost";
$user = "root";
$pass = "Mor190916.";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "Erro na conexão!<br>";
    echo "Erro: ". $conn->connect_error;
}
?>