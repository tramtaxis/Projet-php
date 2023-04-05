<?php session_start();require('FUNCTIONS.php');$_SESSION['estConnecte']=null;?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<title>Connexion</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<link rel="stylesheet" href="style/style.css">
</head>
<script src="js/javascript.js"></script>
<body>
  <div class="svgWaveContains">
    <div class="svgWave"></div>
  </div>
  <?php 
    if(isset($_GET['login_err']))
    {
        $err = htmlspecialchars($_GET['login_err']);
        switch($err)
        {
            case 'passwordlogin':
            ?>
              <div class="erreurPopup">
                <h2 class="txtPopup">Erreur, mot de passe ou login incorrect</h2>
                <img src="images/annuler.png" alt="image annuler" class="imageIcone centerIcon">
                <button class="boutonFermerPopup" onclick="erasePopup('erreurPopup')">Fermer X</button>
              </div>
            <?php
            break;

            case 'deconnexion':
              ?>
                <div class="editPopup">
                  <h2 class="txtPopup">Vous avez bien ete deconnecte</h2>
                  <img src="images/logout.png" alt="image deconnexion" class="imageIcone centerIcon">
                  <button class="boutonFermerPopup" onclick="erasePopup('editPopup')">Fermer X</button>
                </div>
              <?php
            break;

        }
    }
  ?> 
  
  <div class="test"></div>
  <img src="images/logo.png" alt="logo application" class="iconeApp"> 
  <form id="formConnexion" action="indexConnexion.php" method="POST">
    <div class="miseFormeConnexion" id="miseEnFormeConnexion">
      <label for="champIdentifiant" style="color: white;">Identifiant :</label>
      <input type="text" name="champIdentifiant" id="champIdentifiant" placeholder="Entrez votre login"  minlength="1" maxlength="50"  required>
      <span></span>

      <label for="champMotDePasse" style="color: white;">Mot de passe :</label>
      <input type="password" name="champMotDePasse" id="champMotDePasse" placeholder="Mot de passe" minlength="1" maxlength="50" required>
      <span><img src="images/oeilFermé.png" id="oeilMdp" alt="oeil" onclick="afficherMDP('champMotDePasse','oeilMdp')"></span>
      
    </div>

    <button type="submit" name="boutonConnexion" class="boutons" id="boutonConnexion"><img src="images/unlock.png" class="imageIcone" alt="icone cadenas"><span>Connexion</span></button>
  </form>
  
</body>
</html>