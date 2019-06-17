<?php
/* on démarre la session AVANT d'écrir du code Html*/
  session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>PHP part7 exo1</title>
  </head>
  <body>
  <fieldset id="sec">
    <legend>Information personnelles</legend>
    <!-- L'attribut action sert à définir la page appelée par le formulaire
    et grâce à lui on définit le nom de la page ciblé 'user.php'
    C'est cette page user.php qui recevra les données du formulaire
    et qui sera chargée de les traiter. -->
  <form method="post" action="user.php">
    <label for="lastname">Entrez votre nom :</label>
    <input type="texte" name="lastname" id="nom" placeholder="Ex : Dupon" maxlength="20" required autocomplete="on" autofocus/><br>

    <label for="firstname">Entrez votre prénom :</label>
    <input type="text" name="firstname" id="firstname" placeholder="Ex : Toto" maxlength="20" autocomplete="on" required/><br>
    <label for="age"> Entrez votre age : </label>
    <input type="number" name="age" id="age" /><br>
    <input type="submit" value="envoyer" name="send" class="btn"/>
  </form>
  </fieldset>
  </body>
</html>


<?php
/* on démarre la session AVANT d'écrir du code Html*/
  session_start();
  /* On a créee quelques variables de session dans $_SESSION*/
$_SESSION['lastname'] = 'Dupon';
$_SESSION['firstname'] = 'Toto';
$_SESSION['age'] = 24;
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
    <p></p>
    <p><a href="user.php">Allez sur une autre page</a></p>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
