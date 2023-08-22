<?php 
/*                      CONSTRAINTS

    - constraints são características que podem ser adicionadas na hora da criação de uma tabela;
 
    - podemos definir: campos que não podem ser nulos, campos únicos, chaves primárias e mais;
 
    - O comando fica após o tipo da coluna;
 
    - Ex de constraints = not null, primarykey, unique..

            Constraint NOT NULL;

            
    - A NOT NULL é uma constraint
 
    - Esta constraint não permite que o dado adicionado a esta coluna esteja vazio;
 
    - Exemplo nome VARCHAR(100) NOT NULL;

    // Criando tabela e campos
    CREATE TABLE notnull(
        nome VARCHAR(100) NOT NULL,
        idade INT
    );
    // INSERINDO DADOS EM UMA TABELA
    INSERT INTO (notnull) VALUES ("ithalo", 26);
    insira na tabela notnull os valores ithalo e 26

    O MySQL pode aceitar dados nulos para barrar isso digite este código

    SET @@GLOBAL.SQL_MODE = 'STRICT_ALL_TABLES';

        UNIQUE


    - A UNIQUE é uma constraint;
 
    - Garante que todos os valores da coluna que foi adicionado sejam unicos;
 
    - Obs: podemos unir várias constraints
 
    - Ex:
 
    - nome VARCHAR(100) UNIQUE;
 
    - email VARCHAR(255) NOT NULL UNIQUE; (ou seja, não posso deixar de inserir um dado nesta coluna e ele será único, isto é, não poderá existir outro igual);

    Criei a tabela emailmarketing;

    CREATE TABLE emailmarketing(
        email VARCHAR(255) NOT NULL UNIQUE,
        nome VARCHAR(255)
    );
    

        PRIMARY KEY
    
    - A PRIMARY KEY é uma constraint;
  
    - As chaves primárias devem ter valores únicos e não podem ser nulas, geralmente colocadas na coluna de ID;
  
    - Uma tablea só pode ter uma PRIMARY KEY;
  
    - Exemplo
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY;
    (UNSIGNED significa que não pode receber valores negativos);

     

*/

?>