<?php 
/*              Selecionando dados com PDO

    - Para selecionar dados a abordagem também é parecida com mysqli;
 
    - Vamos seguir com a sequência: prepare → bindParam → execute;
 
    - Porém para o resgate dos dados temos dois métodos:
 
    - fetch: recebe apenas a primeira ocorrência;
 
    - fetchAll: recebe todos os dados;

*/

$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Retronando todas as linhas e colunas da tabela itens
// $stmt = $conn->prepare("SELECT * FROM itens");
// $stmt->execute();

// $result = $stmt->fetchAll();

// print_r($result);

// retornando apenas uma linha
$id = 2;

$stmt = $conn->prepare("SELECT * FROM itens");
// $stmt->bindParam(':id', $id);
$result = $stmt->fetch();

print_r($result);
?>