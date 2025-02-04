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
$sql = "SELECT salle.nom AS salle, etage.nom AS etage 
FROM salle
INNER JOIN etage ON salle.id_etage = etage.id";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($salles);
// $date = new DateTime();
// echo $date->format("d/m/y");
// var_dump($date);
var_dump($_SERVER['REQUEST_URI']);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $uri;
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
                <th class="tab">salle</th>
                <th class="tab">etage</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($salles as $salle) {
                echo "<tr>
                        <td class=\"tab\">$salle[salle]</td>  
                        <td class=\"tab\">$salle[etage]</td>  
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>