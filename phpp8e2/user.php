<?php 
/* on démarre la session AVANT d'écrir du code Html*/
  session_start();
?>
<!DOCTYPE html>
<html lang="efr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>PHP part7 exo1</title>
  </head>
  <body>
    <fieldset id="sec">
      <?php
      $r = '/^[A-Z][a-zÀ-ÖØ-öø-ÿ]+([ -][A-Z][a-zÀ-ÖØ-öø-ÿ]+)*$/';
      $a = '/^[1-9]?[0-9]{1}$|^100$/';
      $lastname = strip_tags($_POST['lastname']);
      $firstname = strip_tags($_POST['firstname']);
      $age = strip_tags($_POST['age']);
      
      /*Définition des variables de session*/
      $_SESSION['lastname'] = $lastname;
      $_SESSION['firstname'] = $firstname;
      $_SESSION['age'] = $age; ?>
      <!--Récupération des valeurs des variable de session-->
      
   
      <?php 
      /*On crée un premier cookie qui expire dans une heure
      setcookie($lastname, $firstname, $age, time() + 3600);*/

      if (isset($lastname)) {
        if (preg_match($r, $lastname)) {
          ?>
          <p><?= 'Votre nom est :' .$_SESSION['lastname'] ?></p>
          <p><?= $lastname ?></p>
        <?php } else { ?>
          <p>Merci de rentrez un nom valide</p>
        <?php }
      }
      if (isset($firstname)) {
        if (preg_match($r, $firstname)) { ?>
          <p><?= 'Votre prénom est :' .$_SESSION['firstname'] ?></p>
          <p><?= $firstname ?></p>
        <?php } else { ?>
          <p>Merci de rentrez un prénom valide</p>
        <?php }
        
         }
         if (isset($age)) {
        if (preg_match($a, $age)) { ?>
          <p><?= 'Votre age est :' .$_SESSION['age'] ?></p>
          <p><?= $age ?></p>
        <?php } else { ?>
          <p>Merci de rentrez l'age valide</p>
           
        <?php }
        
         }
     ?>
    </fieldset>
  </body>
</html>

<?php 
/* on démarre la session AVANT d'écrir du code Html*/
  session_start();
 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Part 8 exo 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  <body>
    <p>Salut <?= $_SESSION['firstname'] ?></p>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>


