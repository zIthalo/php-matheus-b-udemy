<?php 
/*              Deletando dados com prepared

    - Para atualizar dados vamos seguir os mesmos passos de INSERT e SELECT;
 
    - Na hora de inserir o WHERE para remover os registros, vamos inserir os prepared statements;
 
    - Sequencia: prepare => bind_param =>execute;
 
    - Lembrando que DELETE sem WHERE, causa a remoção de todos os registros;
*/
$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);

$id = 12;

$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");
$stmt->bind_param("i",$id);
$stmt->execute();

$conn->close();
?>