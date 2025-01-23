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
$sql = "SELECT nom, prenom, naissance From etudiants WHERE sexe = 'Femme'";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                <th class="tab">Prénom</th>
                <th class="tab">Nom</th>
                <th class="tab">Naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $student) {
                echo "<tr>
                            <td class=\"tab\">$student[prenom]</td>
                            <td class=\"tab\">$student[nom]</td>
                            <td class=\"tab\">$student[naissance]</td>
                        </tr>";
            }
            ?>
        </tbody>
    </table>
</body>