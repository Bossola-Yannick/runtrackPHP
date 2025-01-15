<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "voyelles" => [],
    "consonnes" => [],
];

function rangeLettre($lettre)
{
    $lettre = strtolower($lettre);
    global $dic;
    if (($lettre == "a") or ($lettre == "e") or ($lettre == "i") or ($lettre == "o") or ($lettre == "u") or ($lettre == "y")) {
        array_push($dic["voyelles"], $lettre);
    } else array_push($dic["consonnes"], $lettre);
}

for ($i = 0; $i < strlen($str); $i++) {
    rangeLettre($str[$i]);
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
    <table>

        <tbody>
            <tr>
                <td>voyelle</td>
                <?php
                foreach ($dic["voyelles"] as $voyelle) {
                    echo "<td>
                        $voyelle
                        </td>";
                }
                ?>
            </tr>
            <tr>
                <td>consonne</td>
                <?php
                foreach ($dic["consonnes"] as $consonne) {
                    if ($consonne == " ") {
                        echo "";
                    } else
                        echo "<td>
                        $consonne
                        </td>";
                }
                ?>
            </tr>


        </tbody>
    </table>

</body>

</html>