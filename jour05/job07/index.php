<?php
function transform($str, $option)
{
    if ($option == "gras") {
    }
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
    <form action="index.php" method="$_GET">
        <input type="text" name="str" placeholder="ecrire un mot ou une phrase">
        <select name="option">
            <option value="">Choisir une option</option>
            <option value="gras">gras</option>
            <option value="cesar">césar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <button type="submit">valider</button>
    </form>
    <?php
    transform($_GET["str"], $_GET["option"])
    ?>
</body>

</html>