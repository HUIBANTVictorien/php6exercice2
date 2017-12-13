<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 2 partie 6 php</title>
  </head>
  <body>
    <a href="index.php?nom=Nemare&amp;prenom=Jean">Age</a>
    <p><?php
    if (isset($_GET['age'])) {
      echo 'L\'age est de ' .$_GET['age'];
    } else {
      echo 'L\'age n\'est pas renseigné';
    };

     ?></p>

  </body>
</html>
