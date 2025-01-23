<?php
$host = 'localhost';
$username = "root";
$password = "";

try {
    $bdd  = new PDO("mysql:host=$host;dbname=jour08;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connection Réussi';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
$sql = "SELECT SUM(superficie) AS superficie FROM etage";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$superficie = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($superficie);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../job01/style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th class="tab">Superficie_totale</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($superficie as $superficie) {
                echo "<tr>
                        <td class=\"tab\">$superficie[superficie]</td>  
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>