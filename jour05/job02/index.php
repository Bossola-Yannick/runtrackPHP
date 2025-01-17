<?php
function bonjour($jour)
{
    if ($jour) {
        echo "Bonjour";
    } elseif (!$jour) {
        echo "Bonsoir";
    }
}

bonjour(false);
