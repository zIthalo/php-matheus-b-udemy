<?php 

/*
        INSERINDO DADOS

    - Para inserir dados vamos utilizar a instução INSERT;
 
    - Devemos determinar a tabela, colunas e também os dados que serão inseridos;
 
    - Exemplo 
    INSERT INTO tebela (coluna, coluna2) VALUES (valor, valor2);

        SELECIONANDO DADOS
    
    - Para selecionar dados vamos utilizar a instrução SELECT; 
 
    - Devemos determinar a tabela e as colunas que serão selecionadas;
 
    - Podemos utilizar o * para selecionar todas as colunas;
 
    - Ex
        SELECT * FROM tabela; irá mostrar todas as colunas

        PARA SELECIONAR SÓ UMA COLUNA:
        SLECT nome FROM pessoas; Irá mostrar todos os nomes

        SELECIONANDO DADOS COM WHERE

    - O WHERE é uma cláusula utilizada para filtrar registros;
 
    - Vamos poder resgatar os dados que batem apenas com as características que estamos procurando;
 
    - Exemplo:
    SELECT * FROM tabela WHERE coluna = "algo";

    Isso irá retornar a coluna que tem o valor algo

    Como selecionar colunas apartir de determinado id:

    SELECT * FROM `itens` WHERE id > 3;
    vai selecionar todas as colunas onde o id for maior que 3

    Como selecionar um id e um nome por exemplo:

    SELECT id, nome FROM `itens` WHERE id <= 3;

        AND OR E NOT
    
    - Os operadores AND, OR e NOT são semelhantes aos do php e podem auxiliar o WHERE a filtrar mais ainda os dados;
 
    - Podemos utilizar oa operadires em conjunto;
 
    - Veja um exemplo:
    WHERE condicao AND condicao2;

    SELECT * FROM `itens` WHERE id = 2 OR id = 5;
     
            ORDER BY

    - Com o ORDER BY É possível ordenar o retorno com base em alguma coluna;
 
    - Podemos ordenar de forma crescente (ASC) ou decrescente (DESC);
 
    - Exemplo:
    SELECT * FROM itens ORDER BY id DESC;
    ASC OU DESC Tembém ordenam por ordem alfabética ou alfabética-inverso
    
    SELECT * FROM itens WHERE id > 2 ORDER BY name DESC;

    vou selecionar tudo que onde meu id for maior que 2 em ordem decrescente;

            ATUALIZANDO DADOS
    
    - Para atualizar dados em uma tabela vaomos utilizar  a insturção UPDATE;
 
    - Precisamos determinar a tabela, colunas e valores;
 
    - Obs: um UPDATE sem WHERE vai atualizar todos os dados da tabela;
 
    - Exemplo:
    ATUALIZE a tabela MUDE o valor da coluna para = "abc"(ou) 123 ONDE o valor da coluna for = "abc"(ou) 123
    UPDATE tabela SET coluna = "str"(ou)num WHERE condicao;
    UPDATE itens SET nome = "caju" WHERE nome = "goiaba";

    Alterando nome e descrição na mesma linha
    UPDATE itens SET nome = 'Gol', descricao = 'Gol 98 1.6 completo' WHERE nome ='paranauê';

            DELETANDO DADOS 
    - Para deletar dados de uma tabela vamos utilizar o DELETE FROM;
 
    - Obs: DELETE sem WHERE vai deletar todos os dados da tabela;
 
    - Exemplo
    
    DELETE FROM tabela WHERE coluna = valor;
    DELETE FROM notnull WHERE idade = 20;
 
 
 
*/

?>