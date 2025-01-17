<?php
function toit($largeur, $hauteur)
{
    $largToit = 2;
    $espace = 0;
    if ($largeur < $hauteur) {
        $espace = $hauteur;
        echo str_repeat("\u{00A0}", $espace + 2) . "/\\ <br>";
    } else $espace = $largeur - 2;
    for ($t = 0; $t < ($hauteur - 1); $t++) {
        echo str_repeat("\u{00A0}", $espace) . "/" . str_repeat("_", $largToit) . "\ <br>";
        $largToit = $largToit + 2;
        $espace -= 1;
    }
};
function baseToit($hauteur)
{
    $largBase = ($hauteur * 2);
    echo "/" . str_repeat("_", $largBase) . "\<br>";
}
function corps($largeur, $hauteur)
{
    if ($largeur < $hauteur) {
        $jardin = (($hauteur * 2) - ($largeur));
        for ($h = 1; $h <= $hauteur; $h++) {
            echo str_repeat("\u{00A0}", $jardin) . "|" . str_repeat("\u{00A0}", ($largeur * 2)) . "| <br>";
        };
        echo str_repeat("\u{00A0}", $jardin) . "|" . str_repeat("_", $largeur) . "|";
    } elseif ($largeur > $hauteur) {
        for ($h = 1; $h <= $hauteur; $h++) {
            echo "|" . str_repeat("\u{00A0}", ($largeur * 2)) . "| <br>";
        }
        echo "|" . str_repeat("_", $largeur) . "|";
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
        baseToit($hauteur);
        corps($largeur, $hauteur);
    }
    ?>
</body>

</html>