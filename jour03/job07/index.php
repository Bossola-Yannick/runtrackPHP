<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$table = [];
for ($i = 0; $i < strlen($str); $i++) {
    array_push($table, $str[$i]);
}
$tableBis = array_shift($table);
array_push($table, $tableBis);
$maString = implode($table);
echo $maString;
