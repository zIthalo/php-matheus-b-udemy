<?php 
/*
    - Podemos criar usuários no banco, depois utilizá-los para conectar e realizar as queries;
 
    - Além de criar precisamos adicio0nar os privilégios;
 
    - Exemplo:
 
        CREATE USER 'usuario'@'localhost' IDENTIFIED BY 'senha'; 
        GRANT ALL PRIVILEGES ON *.* TO 'usuario'@'localhost';
        FLUSH PRIVILEGES;

        É uma query não muito utilizada, mas ela serve para quando o usuário root e senha não funcionam, então com isso podemos criar um usuário na mão para quando o user root não funcionar;

        O user root é aquele utilizado na hora de conectar o php/site com o banco de dados

        COMANDO PARA VER TODOS OS USUÁRIOS
        
    - SELECT * FROM mysql.user; = isso irá retornar todos os usuários

        Explicando as queries CREATE USER, GRANT ALL PRIVILEGES, FLUSH PRIVILEGES;
    
nome do usuário que eu quero criar↓    ↓Aqui eu vou colocar o servidor
              - CREATE USER 'ithalo'@'localhost' IDENTIFIED BY 'senha123'; 

                              ↓*tudo .de *tudo = Todos os bancos e todas as tabelas
    - GRANT ALL PRIVILEGES ON *.* TO 'ithalo'@'localhost';
    ↓ garanta todos os privilegios e os persista
    - FLUSH PRIVILEGES
            

*/



?>