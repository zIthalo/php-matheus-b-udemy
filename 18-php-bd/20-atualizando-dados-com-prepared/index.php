<?php 
/*  Atualizando dados com prepared

    - Para atualizar dados vamos seguir os mesmos passos de INSERT e SELECT;
 
    - Na hora de inserir o SET para atualizar os campos, vamos inserir os prepared statements
 
    - Sequência prepare => bind_param => execute;
 

*/

$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);
$id = 12;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
$nome = 'skate';
$descricao = 'skate baratin';
$stmt->bind_param('ssi', $nome, $descricao, $id);
$stmt->execute();

if ($stmt->error) {
    echo "Erro: " . $stmt->error;
}

$conn->close();

?>