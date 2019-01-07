<?php
include ('userCtrl.php');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part6 exe1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p>Votre nom est: <?= $lastname ?></p>
  <p>Votre prénom est: <?= $firstname ?></p>
  <p><a href="index.php">retour</a></p>
</body>
</html>
