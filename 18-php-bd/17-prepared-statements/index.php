<?php 
/*      ***Prepared statments teoria***

    - Prepared statements é quando criamos uma query com placeholders em vez dos valores reais;
 
    - Aumentando a segurança e a performance da requisição;
 
    - Neste caso o fluxo muda um pouco, vamos utilizar o método prepare para preparar a query;
 
    - O bind_param para resgatar os parâmetros e o execute para rodar a query;

        ***Inserindo dados com prepared***

    - Para inserir dados com prepared statements vamos seguir a ideia da aula anterior;
 
    - preoare =>bind_param => execute;
 
    - Como temos uma var para guardar estes 3 passos, também devemos fechar a conexão desta var
 
    - Ela, a var, é comumente chamada de statement ou stmt;(declaração)
 
    - Lembre-se de fechar a conexão;
*/
$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);

$nome = "Suporte de microfone";
$descricao = "O suporte é novo";

//Este código serve para impedir que as queries adicionem caracteres especias no meu banco de dados
$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)"); // AS ? são o bind param, traduzindo seria vincular parâmetro, ou seja as ?, são parâmetros que eu vou vincular;


// Aqui eu estou criando a query, 'ss' significa que meus dois parâmetros serão do tipo str;
$stmt->bind_param("ss", $nome, $descricao);
// s = str, i = int, d = double;

$stmt->execute();
//Aqui eu executo a query/método bind_param


$conn->close();
?>