<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <input type="number" name="nombre" id="nombre">
    </form>
    <?php
    if (count($_GET) != 0) {
        if ($_GET["nombre"] % 2 == 0) {
            echo "<h1> Le nombre est Pair </h1>";
        } else echo "<h1> Le nombre est Impair </h1>";
    }
    ?>
</body>

</html>