<?php 
/*
-Constantes são parecidas com vars, salvam o valor na memória, porém seu valor não pode ser alterado;
Ex:
    class Api{
        public const CHAVE_API = "ASO793mJJs#39";
    }
*/

class Humano{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;
    // para acessar uma const com um método
    function mostrarConst(){
        // já não se usa $this mas sim self::CONST
        echo self::BRACOS . '<br>';
    }
}
$ithalo = new Humano;
 #para acessar uma const é assim 
 echo $ithalo::OLHOS . '<br>';
//  Acessando prop = $ithalo->prop
//  Acessando const = $ithalo::OLHOS

?>