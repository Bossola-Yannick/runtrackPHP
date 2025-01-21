<?php
session_start();
$game = 'game';
$myGame = [];
$turn = "-";
if (!isset($_SESSION[$game])) {
    $_SESSION[$game] = $myGame;
};
if (isset($_POST['game'])) {
    for ($i = 0; $i < count($_SESSION['game']); $i++) {
        if (end($_SESSION['game']) == "X") {
            $turn = "O";
        } else $turn = "X";
    };

    array_push($_SESSION['game'], $turn);
    array_push($myGame, $_SESSION['game']);
    var_dump($_POST);
}


if (isset($_POST["reset"])) {
    $myGame = [];
    $_SESSION[$game] = $myGame;
    session_destroy();
}

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta game="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="morpion">
        <div class="line1 center">
            <form action="index.php" method="post">
                <input type="submit" value="-" name="game">
                <input type="submit" value="-" name="game">
                <input type="submit" value="-" name="game">
            </form>
        </div>
        <div class="line2 center">
            <form action="index.php" method="post">
                <input type="submit" value="-" name="game">
                <input type="submit" value="-" name="game">
                <input type="submit" value="-" name="game">
            </form>
        </div>
        <div class="line3 center">
            <form action="index.php" method="post">
                <input type="submit" value="-" name="game">
                <input type="submit" value="-" name="game">
                <input type="submit" value="-" name="game">
            </form>
        </div>
    </div>
    <div class="victory center">
        <h2>X à gagné !</h2>
        <h2>O à gagné !</h2>
        <h2>Match Null !</h2>
        <form action="index.php" method="post">
            <input type="submit" value="Rejouer" name="reset">
        </form>
    </div>
</body>

</html>