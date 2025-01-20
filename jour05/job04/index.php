<?php
$table = [];
function calcule($a, $b, $c)
{
    if ($b == "+") {
        return ($a + $c);
    } elseif ($b == "-") {
        return ($a - $c);
    } elseif ($b == "/") {
        return ($a / $c);
    } elseif ($b == "*") {
        return ($a * $c);
    }
}
echo calcule(20, "/", 2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form action="index.php" method="post">
        <div class="rang1">
            <input type="submit" name="sept" id="sept">
            <label for="sept" class="calNum">7</label>
            <input type="submit" name="huit" id="huit">
            <label for="huit" class="calNum">8</label>
            <input type="submit" name="neuf" id="neuf">
            <label for="neuf" class="calNum">9</label>
            <input type="submit" name="addition" id="addition">
            <label for="addition" class="calOpe">+</label>
        </div>
        <div class="rang2">
            <input type="submit" name="quettre" id="quettre">
            <label for="quattre" class="calNum">4</label>
            <input type="submit" name="cinq" id="cinq">
            <label for="cinq" class="calNum">5</label>
            <input type="submit" name="six" id="six">
            <label for="six" class="calNum">6</label>
            <input type="submit" name="soustraction" id="soustraction">
            <label for="soustraction" class="calNum">-</label>
        </div>
        <div class="rang3">
            <input type="submit" name="un" id="un">
            <label for="un" class="calNum">1</label>
            <input type="submit" name="deux" id="deux">
            <label for="deux" class="calNum">2</label>
            <input type="submit" name="trois" id="trois">
            <label for="trois" class="calNum">3</label>
            <input type="submit" name="division" id="division">
            <label for="division" class="calNum">/</label>
        </div>
        <div class="rang4">
            <input type="submit" name="zero" id="zero">
            <label for="zero" class="calNum">0</label>
            <input type="submit" name="resultat" id="resultat">
            <label for="resultat" class="calNum">=</label>
            <input type="submit" name="multiplication" id="multiplication">
            <label for="multiplication" class="calNum">x</label>
        </div>
    </form>
</body>

</html>