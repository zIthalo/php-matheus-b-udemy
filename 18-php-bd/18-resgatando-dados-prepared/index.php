<?php 
/*          Selecionando dados com prepared
    - Para selecionar dados com prepared statements devemos resgatar os dados com o método fetch_all;
 
    - A sequência será: prepare => bind_param => execute => get_result => fetch_all;

    - E depois devemos fechar a conexão;
*/

$host = 'localhost';
$user = 'ithalo';
$senha = '123';
$db = 'curso_php';

$conn = new mysqli($host, $user, $senha, $db);

$id = 4;
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
$stmt->bind_param("i", $id); # bind_param() envia a var parâmatro para a ? do prepare
$stmt->execute();
$result = $stmt->get_result(); # aqui eu pego o resultado do stmt execute
$data = $result->fetch_all();# salvo este resultado que virá em forma de array na var data

print_r($data); #aqui mostro o resultado
?>