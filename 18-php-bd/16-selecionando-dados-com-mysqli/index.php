<?php 
/*      Selecionando dados com mysqli

    - Para resgatar dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método query;
 
    - A instrução para inserir dados é a SELECT;
 
    - Vamos inserir o método query em uma variável, que é onde receberemos os resultados;
 
    - Com o método fetch_assoc, transformamos os resultados em um array;
 
 -Append - acrescentar;
 -Fetch - buscar;
 -Bind - vincular;
*/
 

$host = 'localhost';
$user = 'ithalo';
$pass = '123';
$db = 'curso_php';

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();
// Um resultado
$item = $result->fetch_assoc();

// Todos os resultados
$itens = $result->fetch_all();
print_r($item);
echo '<br>';
print_r($itens);

/*      Prepared statments teoria

    - Prepared statements é quando criamos uma query com placeholders em vez dos valores reais;
 
    - Aumentando a segurança e a performance da requisição;
 
    - Neste caso o fluxo muda um pouco, vamos utilizar o método prepare para preparar a query;
 
    - O bind_param para resgatar os parâmetros e o execute para rodar a query;

        Inserindo dados com prepared

    - Para inserir dados com prepared statements vamos seguir a ideia da aula anterior;
 
    - preoare =>bind_param => execute;
 
    - Como temos uma var para guardar estes 3 passos, também devemos fechar a conexão desta var
 
    - Ela é comumente chamada de statement;(declaração)
 
    - Lembre-se de fechar a conexão;
 
 
*/

?>