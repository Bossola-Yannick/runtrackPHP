<?php
$myBool = true;
$string = "ma chaine de caractères";
$entier = 12;
$numVir = 23.9;
echo $entier . " + " . $numVir
?>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </thead>
        <tbody>
            <tr>
                <td>Booleen</td>
                <td>$mybool</td>
                <td><?= $myBool
                    ?></td>
            </tr>
            <tr>
                <td>String</td>
                <td>$string</td>
                <td><?= $string
                    ?></td>
            </tr>
            <tr>
                <td>Entiier</td>
                <td>$entier</td>
                <td><?= $entier
                    ?></td>
            </tr>
            <tr>
                <td>Nb Float</td>
                <td>$numVir</td>
                <td><?= $numVir
                    ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>