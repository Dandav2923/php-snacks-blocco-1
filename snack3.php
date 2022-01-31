<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php

$randArray = [];
$i = 0;
while (count($randArray) < 15) {
    $randNum = rand(1 , 100);
    if (!in_array($randNum, $randArray)) {
        $randArray[] = $randNum;
    }
}
var_dump($randArray);

?>