<?php
session_start();
$myGame = [];
$turn = "-";
$case = array_keys($_POST);
var_dump($case);

// INITIALISATION de la SESSION
if (!isset($_SESSION['game'])) {
    $_SESSION['game'] = [];
};
// losrque l'on appui sur un bouton permet de lancé le verif
if (isset($_POST[$case[0]])) {
    // vérifi la derniere valeur X ou O et le change  
    for ($i = 0; $i < count($_SESSION['game']); $i++) {
        if (end($_SESSION['game']) == "X") {
            $_POST[$case[0]] = "O";
            $turn = $_POST[$case[0]];
        } else {
            $_POST[$case[0]] = "X";
            $turn = $_POST[$case[0]];
        };
    };

    $laCase = $case[0];
    $myGame[$laCase] = $turn;
    array_push($myGame, $myGame[$laCase]);
    var_dump($myGame);
    //remplit un tableau pour savoir quelle valeur doit prendre la case
    array_push($_SESSION['game'], $turn);

    $_POST[$case[0]] = $turn;
    echo $turn;
    echo $_POST[$case[0]];
}
// Fonction de restart du jeu
function resetGame()
{
    global $turn;
    $_SESSION['game'] = [];
    session_destroy();
    $turn = "-";
    header("location:index.php");
}

// Lancement de la fonction restart lors de l'appuis sur le bouton rejouer
if (isset($_POST["reset"])) {
    resetGame();
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
                <input type="submit" value=<?= $turn ?> name="one">
                <input type="submit" value=<?= $turn ?> name="two">
                <input type="submit" value=<?= $turn ?> name="three">
            </form>
        </div>
        <div class="line2 center">
            <form action="index.php" method="post">
                <input type="submit" value=<?= $turn ?> name="four">
                <input type="submit" value=<?= $turn ?> name="five">
                <input type="submit" value=<?= $turn ?> name="six">
            </form>
        </div>
        <div class="line3 center">
            <form action="index.php" method="post">
                <input type="submit" value=<?= $turn ?> name="seven">
                <input type="submit" value=<?= $turn ?> name="height">
                <input type="submit" value=<?= $turn ?> name="nine">
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