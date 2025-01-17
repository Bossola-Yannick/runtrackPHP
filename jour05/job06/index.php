<?php
function leetSpeak($str)
{
    $strTable = [];
    $strLeet = [];
    for ($i = 0; $i < strlen(($str)); $i++) {
        array_push($strTable, $str[$i]);
    }
    for ($i = 0; $i < count($strTable); $i++) {
        if (strtolower($strTable[$i]) == "e") {
            $strTable[$i] = "3";
            array_push($strLeet, $strTable[$i]);
        } elseif (strtolower($strTable[$i]) == "o") {
            $strTable[$i] = "0";
            array_push($strLeet, $strTable[$i]);
        } elseif (strtolower($strTable[$i]) == "s") {
            $strTable[$i] = "5";
            array_push($strLeet, $strTable[$i]);
        } elseif (strtolower($strTable[$i]) == "t") {
            $strTable[$i] = "7";
            array_push($strLeet, $strTable[$i]);
        } elseif ((strtolower($strTable[$i]) == "i") or (strtolower($strTable[$i]) == "l")) {
            $strTable[$i] = "1";
            array_push($strLeet, $strTable[$i]);
        } else array_push($strLeet, $strTable[$i]);
    }
    echo implode($strTable);
    echo implode($strLeet);
}
leetSpeak("hello la plateforme");
