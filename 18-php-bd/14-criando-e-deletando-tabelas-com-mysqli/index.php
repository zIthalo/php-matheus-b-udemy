<?php 
/*          CRIANDO E DELETANDO TABELAS COM MYSQLI
    - Para criar e deletar tabelas vamos utilizar as mesmas queries de SQL puro, porém com o auxilio do método query;
 
    - DROP TABLE deleta tabela;
 
    - CREATE TABLE cria tabela;
 
    - Lembrar sempre de fechar a conexão;
*/

$host = 'localhost';
$user = 'root';
$pass = 'Mor190916.';
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);

// $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
$q = "DROP TABLE teste";
$conn->query($q);

$conn->close();
