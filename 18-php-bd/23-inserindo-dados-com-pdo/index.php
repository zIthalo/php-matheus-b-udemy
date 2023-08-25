<?php 
/*      Inserindo dados com PDO

    - Em PDO vamos utilizar uma abordagem parecida com o mysqli;

    - Utilizaremos o método prepare para realizar a query com prepared statements;

    - Depois obind_param para estabelecer os valores dos parâmetros;

    - Por fim execute() fará a execução da query
    $stmt = $con->prepare("INSERT INTO tabela(coluna1, coluna2) VALUES (:coluna1, :coluna2)");
*/
$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$animal = 'Cavalo';
$desc = 'Cavalo de raça, o melhor de Caetés.';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

 $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");
 
 $stmt->bindParam(":nome", $animal);
 $stmt->bindParam(":descricao", $desc);
 $stmt->execute();

 


?>