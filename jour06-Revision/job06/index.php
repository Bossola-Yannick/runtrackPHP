<?php
$style = './style.css';
if ($_GET) {
    if ($_GET["style"] == "style-1") {
        $style = "./style-1";
    }
    if ($_GET["style"] == "style-2") {
        $style = "./style-2";
    }
    if ($_GET["style"] == "style-3") {
        $style = "./style-3";
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=<?= $style ?>>
</head>

<body>
    <form action="index.php" method="$_GET">
        <select name="style" id="style">
            <option value="">Sélectionner un style</option>
            <option name="style" value="style-1" class="monStyle">Style 1</option>
            <option name="style" value="style-2" class="monStyle">Style 2</option>
            <option name="style" value="style-3" class="monStyle">Style 3</option>
        </select>
        <button type="submit">Valider</button>
    </form>
</body>

</html>