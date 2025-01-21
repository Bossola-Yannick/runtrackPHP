<?php
session_start();

$name = 'name';
$tabName = [];
if (!isset($_SESSION[$name])) {
    $_SESSION[$name] = $tabName;
}

if (isset($_POST['valid'])) {
    array_push($_SESSION['name'], $_POST['name']);
    array_push($tabName, $_POST['name']);
}

if (isset($_POST["reset"])) {
    $tabName = [];
    $_SESSION[$name] = $tabName;
    session_destroy();
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
    <p>valeur de la session : <?= implode(", ", $_SESSION[$name]) ?> </p>
    <form action="index.php" method="post">
        <input type="text" name="name">
        <input type="submit" value="Valider" name="valid">
    </form>
    <form action="index.php" method="post">
        <input type="submit" value="Reset" name="reset">
    </form>
</body>

</html>