<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

function isVowel($letter)
{
    $letter = strtolower($letter);
    if (($letter == "a") or ($letter == "e") or ($letter == "i") or ($letter == "o") or ($letter == "u") or ($letter == "y")) {
        return TRUE;
    } else return FALSE;
};

for ($i = 0; $i < strlen($str); $i++) {
    if (isVowel($str[$i])) {
        echo $str[$i] . " est une voyelle !<br>";
    }
}
