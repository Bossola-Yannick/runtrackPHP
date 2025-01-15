<?php
$str = "Les choses que l'on Possede finissent par nous posseder";

$table = [];

for ($i = 0; $i < strlen($str); $i++) {
    array_push($table, $str[$i]);
}
$tableReverse = array_reverse($table);
$reverseStr = implode("", $tableReverse);
echo $reverseStr;
