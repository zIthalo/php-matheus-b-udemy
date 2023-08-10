<?php 
/*
    -Crie uma classe Cachorro;
    -Crie o métopdo latir e andar;
    -Execute o método em novas instâncias da classe;
*/
 class Cachorro{
    function latir($str = 'O cachorro'){
        echo "$str diz: Au Au! <br>";
    }
    function andar($str = 'O cachorro'){
        echo "$str Andou 3 passos <br>";
    }
 }
 $bob = new Cachorro;
 $toto = new Cachorro;

 $bob->latir('Bob');
 $toto->andar('Toto');



?>