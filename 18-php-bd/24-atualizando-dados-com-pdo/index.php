<?php 
/*      Atualizando dados com PDO

    - Para atualizar a abordagem tambéms é parecida;
  
    - Vamos seguir com a sequência: prepare() => bindParam() => execute();
  
    - E então a query persistirá no banco;
  $stmt = $conn->prepare("UPDATE tabela SET col1 = :col1, col2 = :col2 WHERE id = :id");

*/

$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 16;
$nome = 'Boi';
$desc = 'Boi friboi';

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $desc);
$stmt->bindParam(':id', $id);

$stmt->execute();
?>