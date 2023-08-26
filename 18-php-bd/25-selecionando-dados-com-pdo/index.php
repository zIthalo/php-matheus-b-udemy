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

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");
$stmt->bindParam(":id", $id);

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
// PDO::FETCH_ASSOC - serve para os dados não virem duplicados na exibição

print_r($result);
// Retornando mais linhas
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<br>';
print_r($itens);

?>