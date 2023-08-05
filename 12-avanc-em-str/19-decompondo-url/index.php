<?php 
/*
    -Com  a função parse_url() podemos decompor uma url, isto é, separá-la em partes específicas;
    -vamos receber um array com todas as partes que a URL tem;
    -alguns elementos que podem ser retornados são: protocolo, host, parâmetros;
*/
$url = "https://www.google.com";

var_dump(parse_url($url));

echo "<br>";

print_r(parse_url($url));

echo "<br>";

$arrUrl = parse_url($url);

echo $arrUrl["host"].'<br>';

$url2 = "https://www.tecnosmart.com.br/?busca=php";

$arrUrl2 = parse_url($url2);

echo $arrUrl2["host"].'<br>';

$url3 = "https://www.tecnosmart.com.br/usuarios/ithalowillian?id=12&nome=Ithalo";

$arrUrl3 = parse_url($url3);

print_r($arrUrl3);
#este parse_url serve para dar informações das partes das url's, serve para aprender sobre elas e para verificá-las
?>