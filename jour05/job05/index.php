<?php
function occurrences($str, $char)
{
    $charNum = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (strtolower($str[$i]) == strtolower($char)) {
            $charNum++;
        }
    };
    echo "dans " . $str . " il y as " . $charNum . " de lettre " . $char;
}
occurrences("Obonjur", "o");
