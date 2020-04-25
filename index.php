<?php
require("admin/chiffrement.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title> Hashage de texte </title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>


<body>

  <h1> <i class="fas fa-shield-alt"></i> Sécuriser un texte avec E-SEC <i class="fas fa-shield-alt"></i> </h1>
  <p> Le principe est simple, vous entrez un texte et en appuyant sur le boutton envoie, notre algorithme le hash et vous pouvez le récupérer </p>
  <p class="sub"> Nos serveurs ne récupèrent pas les informations que vous rentrez, ce site est à usage purement éducatif </p>

  <form action="index.php" method="post">

    <textarea id="aconvertir" name="aconvertir" rows="20" cols="120" placeholder="Entrez votre texte ici..." ><?php
    if(!empty($_POST)) {
        echo "Votre text chiffré : " .$convert2. "  ";
        echo "\n";
        echo "Votre text chiffré et repasé en Hex :" .$converti. "    ";
        echo "\n"; 
        echo "Votre text Crypté : " .$crypt. "  "; }
       ?></textarea> <br>

    <input type="reset" value="Effacer" class="btn-envoie">
    <input type="submit" value="Chiffrer" class="btn-envoie">

    <label for="cle"><i class="fas fa-key"></i> Clé de déchiffrage   </label>
    <input type="text" value="Prochainement ..." name="cle" id="cle" disabled>

  </form>


  <script src="https://kit.fontawesome.com/3f20d1dcb8.js" crossorigin="anonymous"></script>

</body>
</html>
