<?php

if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 0;
}

if (isset($_POST['reset'])) {
    setcookie("nbvisites", "");
    $nbvisites = 0;
} else {
    setcookie('nbvisites', $nbvisites);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>

<body>
    <p>Nombre de visites : <?= $nbvisites ?></p>
    <form action="index.php" method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>