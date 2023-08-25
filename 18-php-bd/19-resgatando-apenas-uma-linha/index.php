<?php 
/*  Resgatando apenas uma linha

    - Para os selects que precisamos de apenas um dado retornado, podemos utilizar o fetch_row;
 
    - Este método pode ser inserido depois de obter o resultado, ou seja, após o get_result;
*/

$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);

$id = 4;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_row();

print_r($data);
// ids que não existem, obviamente, não serão exibidos na tela

$conn->close(); 

?>