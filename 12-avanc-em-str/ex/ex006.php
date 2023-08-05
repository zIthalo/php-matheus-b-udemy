<?php 
/*
    -converter este arr para str: ['O', 'PHP', 'é', 'muito', 'legal'];

*/

$arr = ['O', 'PHP', 'é', 'muito', 'legal'];
$str = implode(' ', $arr);
echo $str;
?>