<?php 
$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'agenda';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Ativar modo de erros; (explícita os erros na tela)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // os pârametros param o software e mostram o erro

} catch (PDOException $e) {
    // erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error <br>";
}
?>