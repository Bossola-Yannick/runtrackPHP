<?php
function calcule($a, $b, $c)
{
    if ($b == "+") {
        return ($a + $c);
    } elseif ($b == "-") {
        return ($a - $c);
    } elseif ($b == "/") {
        return ($a / $c);
    } elseif ($b == "*") {
        return ($a * $c);
    }
}
echo calcule(20, "/", 2);
