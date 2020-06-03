<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Donnée Secrète</title>
  </head>
  <body>
    <?php
      $bonMdp = "motdepasse";

      if ($_POST['mdp'] == $bonMdp)
      {
        echo ('Accés Autorisé');
        include ('donneeNasa.php');
      }
      else {
        echo ('Accés Refusé')
    ?>
    <p>Retourner au <a href="form.php">formulaire</a></p>
    <?php    }
    ?>

  </body>
</html>
