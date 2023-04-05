<?php session_start();require('FUNCTIONS.php');testConnexion();?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <title>Modifier un joueur</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <div class="svgWaveContains">
    <div class="svgWave"></div>
  </div>

  <?php faireMenu();?>

  <h1>Modifier un joueur</h1>

  <form id="form" method="POST" onsubmit="erasePopup('erreurPopup'),erasePopup('validationPopup')" enctype="multipart/form-data">
  <div class="miseEnForme" id="miseEnFormeFormulaire">
      <?php
        afficherUnJoueur($_POST['boutonModifier']);
      ?>
  </div>

    <div class="center" id="boutonsValiderAnnuler">
      <button type="submit" formaction="joueur.php" name="boutonAnnuler" class="boutonAnnuler"><img src="images/annuler.png" class="imageIcone" alt="icone annuler"><span>Annuler&ensp;</span></button>
      <button type="submit" formaction="joueur.php?params=modif" value="<?php echo $_POST['boutonModifier']; ?>" name="boutonEdit" class="boutonEdit" id="boutonValider"><img src="images/edit.png" class="imageIcone" alt="icone valider"><span>Appliquer</span></button>
    </div>
  </form>
  
</body>
</html>