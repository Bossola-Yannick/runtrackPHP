<?php
session_start();

$nbVisites = 'nbVisite';

if (!isset($_SESSION[$nbVisites])) {
    $_SESSION[$nbVisites] = 0;
} else $_SESSION[$nbVisites]++;

if (isset($_POST["reset"])) {
    $_SESSION[$nbVisites] = 0;
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
    <p>nombre de visite : <?= $_SESSION[$nbVisites] ?> </p>
    <form action="index.php" method="post">
        <input type="submit" value="Reset" name="reset">
    </form>

</body>

</html>