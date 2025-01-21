<?php

if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = " ";
}

if (isset($_POST['reset'])) {
    setcookie("name", "");
    $name = " ";
} else {
    setcookie('name', $name);
}
if (isset($_POST['valid'])) {
    if (isset($_POST['name'])) {
        $_COOKIE['name'] = $_POST['name'];
        $name = $_COOKIE['name'];
    } else setcookie('name', $name);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST['name'])) {
        echo '
        <form action="index.php" method="post">
            <input type="text" name="name">
            <input type="submit" value="Valider" name="valid">
        </form>
        ';
    } else echo
    "<p> Bonjour " . $_COOKIE['name'] . "</p>
    <form action=\"index.php\" method=\"post\">
        <input type=\"submit\" value=\"Reset\" name=\"reset\">
    </form>";
    ?>

</body>

</html>