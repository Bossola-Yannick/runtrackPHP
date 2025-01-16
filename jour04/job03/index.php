<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="age" placeholder="Age">
        <button type="submit">Valider</button>
    </form>
    <?php
    $count = count($_POST);
    var_dump($_POST);
    ?>
    <h1><?= $count  ?></h1>
</body>

</html>