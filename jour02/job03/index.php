<?php
for ($i = 0; $i <= 100; $i++) {
    if (($i >= 0) and ($i <= 20)) {
        echo "<i>$i</i><br>";
    } elseif ((21 <= $i) and ($i <= 50)) {
        if ($i == 42) {
            echo "La Plateforme_<br>";
        } else echo "<u>$i</u><br>";
    } else echo $i . "<br>";
}
