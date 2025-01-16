  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>

  <body>
      <form action="index.php" method="get">
          <input type="text" name="nom" placeholder="Nom">
          <input type="text" name="prenom" placeholder="Prénom">
          <input type="text" name="age" placeholder="Age">
          <button type="submit">Valider</button>
      </form>
      <?php
        $count = count($_GET);
        var_dump($_GET);
        echo $_GET["nom"];
        ?>
      <h1><?= $count  ?></h1>
  </body>

  </html>