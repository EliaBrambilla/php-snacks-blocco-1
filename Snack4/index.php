<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$arrayNumeriCasuali = [];

for($i = 0; $i < 10; $i++){

   $myNewInt = rand(1 , 100);
   
   $arrayNumeriCasuali[] = $myNewInt;
}

var_dump($arrayNumeriCasuali);

?>