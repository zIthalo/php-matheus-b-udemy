<?php 
/*
        Inserindo dados com mysqli

    - Para inserir dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método query;
 
    - A instrução para inserir dados é a INSERT INTO;
 
    - Devemos passar tabela, colunas e valores;
*/

$host = 'localhost';
$user = 'root';
$senha = 'Mor190916.';
$db = 'curso_php';

$conn = new mysqli($host, $user, $senha, $db);

$table = "itens";
$nome = "jaca";
$descricao = "Jaca mole no precinho";

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')"; 
// sempre que o valor das vars sejam str não posso esquecer de colocar as aspas simples;
$conn->query($q);

$conn->close();
?>