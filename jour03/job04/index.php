<?php
$str = "Dans l'espace, personne ne vous entend crier";

for ($i = 0; $i <= strlen($str); $i++) {
    if ($i == strlen($str)) {
        echo $i;
    }
}
