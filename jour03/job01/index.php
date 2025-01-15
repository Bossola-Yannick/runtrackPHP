<?php
$numbers = [200, 204, 173, 98, 171, 404, 459];
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        echo $num . "est pair !<br>";
    } else echo $num . "est impair !<br>";
}
