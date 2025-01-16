<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="UserName">
        <input type="text" name="password" placeholder="Password">
        <button type="submit">Valider</button>
    </form>
    <?php
    $username = "John";
    $password = "Rambo";
    if (count($_POST) != 0) {
        if ((strtolower($_POST["username"]) == strtolower($username)) and (strtolower($_POST["password"]) == strtolower($password))) {
            echo "<h1>C'est pas ma Guerre !</h1>";
        } else echo "<h2>Votre pire cauchmard</h2>";
    }
    ?>
</body>

</html>