<?php
$tab = [32, 5, 12, 3, 14, 41, 8, 16, 11];

function bubblesort($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        if ($tab[$i] > $tab[$i + 1]) {
        };
    }
    var_dump($tab);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="box" style="display: flex; gap:1rem;">
        <?php
        bubblesort($tab);
        for ($i = 0; $i < count($tab); $i++) {
            echo "<div style=\"height:$tab[$i]rem; width:2rem; background-color:red;\"> $tab[$i] </div>";
        }
        ?>
    </section>

</body>

</html>