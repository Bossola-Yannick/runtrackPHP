<?php
function corps($largeur, $hauteur)
{

    echo "/" . str_repeat("_", $largeur) . "\<br>";
    for ($h = 1; $h <= $hauteur; $h++) {
        echo "|" . str_repeat("\u{00A0}", ($largeur * 2)) . "| <br>";
    };
    echo "|" . str_repeat("_", $largeur) . "|";
};
function toit($largeur, $hauteur)
{
    echo str_repeat("\u{00A0}", $largeur) . "/\\ <br>";
    $largToit = 2;
    for ($t = 0; $t <= ($hauteur - 2); $t++) {
        echo str_repeat("\u{00A0}", ($largeur - $largToit)) . "/" . str_repeat("_", $largToit) . "\ <br>";
        $largToit = $largToit + 2;
    }
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <input type="number" name="largeur" placeholder="Largeur">
        <input type="number" name="hauteur" placeholder="hauteur">
        <button type="submit">Valider</button>
    </form>
    <?php
    if (count($_GET) != 0) {
        var_dump($_GET);
        $largeur = $_GET["largeur"];
        $hauteur = $_GET["hauteur"];
        toit($largeur, $hauteur);
        corps($largeur, $hauteur);
    }
    ?>
</body>

</html>