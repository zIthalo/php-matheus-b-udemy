<?php 
/*
    - Recebe uma str como parâmetro, que é um texto sinalizando tempo;
    - A função tenta interpretar e transformar em data
    - Veja um exemplo de utilização;
        echo date('d/m/y', strtotime('+2years')) //Mais 2 anos;
*/
echo date('d/m/y') . '<br>';
 $cincodias= strtotime("5 days");
 echo $cincodias . '<br>';
 # Saída: 1692232828. Isto representa para o php 5 dias, com este valor ele irá acrescentar 5 dias a uma data
 # mas estes 5 dias significam 5 dias da data base do php, ou seja, se eu digitar este código em outro dia, os números serão diferentes e ele faz adição de dias em um formato parecido com segundos, toda vez que você atualizar o site o número ficará diferente.
 $dezdias= strtotime("10 days");
 echo $dezdias . '<br>';
 # Saída: 1701308635;
 //  Como adicionar mais 5 dias em uma data?
 $dataAtualMais5 = date('d/m/y', $cincodias);
 echo $dataAtualMais5 . '<br>';
  $dataAtualMais10 = date('d/m/y', $dezdias);
  echo $dataAtualMais10 . '<br>';
// posso adicionar meses e anos também ex:
  $doismeses = strtotime('2 months');
  $dataAtualMaisDoisMeses = date('d/m/y', $doismeses);
  $dozeanos = strtotime('12 years');
  $dataAtualMaisDozeAnos = date('d/m/y', $dozeanos);
  echo $dataAtualMaisDoisMeses . '<br>';
  echo $dataAtualMaisDozeAnos . '<br>';

 ?>